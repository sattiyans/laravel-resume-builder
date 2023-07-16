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

        return redirect()->route('index')->withSuccess("Resume created successfully");
    }

    public function destroy($id)
    {

        if (!empty($id)) {

            PersonalInformation::find($id)->delete();
            ContactInformation::where('user_id', $id)->delete();
            Education::where('user_id', $id)->delete();
            Experience::where('user_id', $id)->delete();

            return redirect()->back()->withSuccess("Resume deleted successfully");
        } else {

            return redirect()->back()->withSuccess("Something went wrong");
        }
    }
}