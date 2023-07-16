<?php

namespace App\Http\Controllers;

use App\Models\ContactInformation;
use App\Models\Education;
use App\Models\Experience;
use App\Models\PersonalInformation;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        $personal_information   = PersonalInformation::get()->toArray();

        if (!empty($personal_information)) {

            $user_data = array();
            foreach ($personal_information as $personal_info) {

                $user_id = $personal_info['id'];

                if (!empty($user_id)) {
                    $user_info['personal_info']         = $personal_info;


                    $contact_info                       = ContactInformation::find($user_id);
                    if (!empty($contact_info)) {

                        $user_info['contact_info']      = $contact_info->toArray();
                    }

                    $education_info                     = Education::find($user_id);
                    if (!empty($education_info)) {
                        $user_info['education_info']    = $education_info->toArray();
                    }

                    $experience_info                    = Experience::find($user_id);
                    if (!empty($experience_info)) {
                        $user_info['experience_info']   = $experience_info->toArray();
                    }
                }

                array_push($user_data, $user_info);
            }
        } else {
            $user_data = array();
        }

        return view('index', ['users_data' => $user_data]);
    }

    public function view($id)
    {
        if (!empty($id)) {
            $personal_information       = PersonalInformation::find($id)->toArray();
            $contact_information        = ContactInformation::where('user_id', $id)->get()->first()->toArray();
            $education_information      = Education::where('user_id', $id)->get()->toArray();
            $experience_information     = Experience::where('user_id', $id)->get()->toArray();

            $info['personal_info']      = $personal_information;
            $info['contact_info']       = $contact_information;
            $info['education_info']     = $education_information;
            $info['experience_info']    = $experience_information;
        }

        return view('view', ['information' => $info]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $personal_info = new PersonalInformation();
        $personal_info->first_name        = $request->first_name;
        $personal_info->last_name         = $request->last_name;
        $personal_info->profile_title     = $request->profile_title;
        $personal_info->about_me          = $request->about_me;
        $personal_info->save();

        $personal_information = PersonalInformation::latest()->first();

        $contact_info = new ContactInformation();
        $contact_info->user_id          = $personal_information->id;
        $contact_info->email            = $request->email;
        $contact_info->phone_number     = $request->phone_number;
        $contact_info->website          = $request->website;
        $contact_info->linkedin_link    = $request->linkedin_link;
        $contact_info->save();


        $edu_count = count($request->degree_title);
        if ($edu_count != 0) {
            for ($i = 0; $i < $edu_count; $i++) {

                $education_info = new Education();
                $education_info->user_id                = $personal_information->id;
                $education_info->degree_title           = $request->degree_title[$i];
                $education_info->institute              = $request->institute[$i];
                $education_info->edu_start_date         = $request->edu_start_date[$i];
                $education_info->edu_end_date           = $request->edu_end_date[$i];
                $education_info->education_description  = $request->education_description[$i];
                $education_info->save();
            }
        }


        $exp_count = count($request->job_title);
        if ($exp_count != 0) {
            for ($i = 0; $i < $exp_count; $i++) {

                $experience_info = new Experience();
                $experience_info->user_id          = $personal_information->id;
                $experience_info->job_title        = $request->job_title[$i];
                $experience_info->organization     = $request->organization[$i];
                $experience_info->job_start_date   = $request->job_start_date[$i];
                $experience_info->job_end_date     = $request->job_end_date[$i];
                $experience_info->job_description  = $request->job_description[$i];
                $experience_info->save();
            }
        }

        return redirect()->route('index')->withSuccess("User Profile created successfully");
    }

    public function edit($id)
    {
        if (!empty($id)) {
            $personal_information       = PersonalInformation::find($id)->toArray();
            $contact_information        = ContactInformation::where('user_id', $id)->get()->toArray();
            $education_information      = Education::where('user_id', $id)->get()->toArray();
            $experience_information     = Experience::where('user_id', $id)->get()->toArray();

            $info['personal_info']      = $personal_information;
            $info['contact_info']       = $contact_information;
            $info['education_info']     = $education_information;
            $info['experience_info']    = $experience_information;

            return view('edit', ['information' => $info]);
        } else {
            return redirect()->back()->withErrors('Somthing went wrong');
        }
    }

    public function update(Request $request)
    {

        if ($request->verify == 1) {
            $id = $request->user_id;

            $personal_info = PersonalInformation::find($id);
            $personal_info->first_name        = $request->first_name;
            $personal_info->last_name         = $request->last_name;
            $personal_info->profile_title     = $request->profile_title;
            $personal_info->about_me          = $request->about_me;
            $personal_info->save();

            $contact_info = ContactInformation::where('user_id', $id)->get()->first();
            $contact_info->user_id          = $id;
            $contact_info->email            = $request->email;
            $contact_info->phone_number     = $request->phone_number;
            $contact_info->website          = $request->website;
            $contact_info->linkedin_link    = $request->linkedin_link;
            $contact_info->save();


            $education_info     = Education::where('user_id', $id)->get();
            $edu_count_local    = !empty($request->degree_title) ? count($request->degree_title) : 0;
            $edu_count_live     = count($education_info);

            $edu_count_live >= $edu_count_local ? $edu_count = $edu_count_live : $edu_count = $edu_count_local;

            if ($edu_count != 0) {
                for ($i = 0; $i < $edu_count; $i++) {

                    if ($edu_count_local > 0 && $edu_count_live <= 0) {

                        $edu_info = new Education();
                        $edu_info->user_id                = $id;
                        $edu_info->degree_title           = $request->degree_title[$i];
                        $edu_info->institute              = $request->institute[$i];
                        $edu_info->edu_start_date         = $request->edu_start_date[$i];
                        $edu_info->edu_end_date           = $request->edu_end_date[$i];
                        $edu_info->education_description  = $request->education_description[$i];
                        $edu_info->save();
                    } elseif ($edu_count_live > 0 && $edu_count_local <= 0) {

                        Education::find($education_info[$i]['id'])->delete();
                    } else {

                        $education_info[$i]->user_id                = $id;
                        $education_info[$i]->degree_title           = $request->degree_title[$i];
                        $education_info[$i]->institute              = $request->institute[$i];
                        $education_info[$i]->edu_start_date         = $request->edu_start_date[$i];
                        $education_info[$i]->edu_end_date           = $request->edu_end_date[$i];
                        $education_info[$i]->education_description  = $request->education_description[$i];
                        $education_info[$i]->save();
                    }

                    $edu_count_local--;
                    $edu_count_live--;
                }
            }



            $experience_info    = Experience::where('user_id', $id)->get();
            $exp_count_local    = !empty($request->job_title) ? count($request->job_title) : 0;
            $exp_count_live     = count($experience_info);

            $exp_count_live >= $exp_count_local ? $exp_count = $exp_count_live : $exp_count = $exp_count_local;

            if ($exp_count != 0) {
                for ($i = 0; $i < $exp_count; $i++) {

                    if ($exp_count_local > 0 && $exp_count_live <= 0) {

                        $exp_info = new Experience();
                        $exp_info->user_id          = $id;
                        $exp_info->job_title        = $request->job_title[$i];
                        $exp_info->organization     = $request->organization[$i];
                        $exp_info->job_start_date   = $request->job_start_date[$i];
                        $exp_info->job_end_date     = $request->job_end_date[$i];
                        $exp_info->job_description  = $request->job_description[$i];
                        $exp_info->save();
                    } elseif ($exp_count_live > 0 && $exp_count_local <= 0) {

                        Experience::find($experience_info[$i]['id'])->delete();
                    } else {
                        $experience_info[$i]->user_id          = $id;
                        $experience_info[$i]->job_title        = $request->job_title[$i];
                        $experience_info[$i]->organization     = $request->organization[$i];
                        $experience_info[$i]->job_start_date   = $request->job_start_date[$i];
                        $experience_info[$i]->job_end_date     = $request->job_end_date[$i];
                        $experience_info[$i]->job_description  = $request->job_description[$i];
                        $experience_info[$i]->save();
                    }

                    $exp_count_local--;
                    $exp_count_live--;
                }
            }
        }

        return redirect()->back()->withSuccess("User Profile updated successfully");
    }

    public function destroy($id)
    {

        if (!empty($id)) {

            PersonalInformation::find($id)->delete();
            ContactInformation::where('user_id', $id)->delete();
            Education::where('user_id', $id)->delete();
            Experience::where('user_id', $id)->delete();

            return redirect()->back()->withSuccess("User Profile deleted successfully");
        } else {

            return redirect()->back()->withSuccess("Something went wrong");
        }
    }
}