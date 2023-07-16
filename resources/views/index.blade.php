{{ view('layouts/header')}}

    <div class="container">
    <main>
        <div class="py-5 text-center">
            <div class="d-flex justify-content-center">
  <img class="d-block mb-4" src="{{asset('assets/brand/laravel.svg')}}" alt="" width="72" height="57">
  <img class="d-block mb-4" src="{{asset('assets/brand/bootstrap-logo.svg')}}" alt="" width="72" height="57">
</div>

        <h2>Resume Builder</h2>
        </div>
        <div class="mb-3 d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Resume list</h4>
            <a href="create" class="btn btn-primary" type="button">Create resume</a>
            </div>
<table id="user_table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $count = 1;
                                @endphp
                                @foreach ($users_data as $user)
                                    <tr>
                                        <td>{{ $count }}</td>
                                        <td>{{ $user['personal_info']['profile_title'] }}</td>
                                        <td>{{ $user['personal_info']['first_name'] }}</td>
                                        <td>{{ $user['personal_info']['last_name'] }}</td>
                                        <td>{{ $user['contact_info']['email'] }}</td>
                                        <td align="center">
                                            <div class="d-flex flex-row justify-content-around">
                                                <div class="action-icons">
                                                    <a target="_blank" class="view_btn" href="{{ route('resume.profile.view', $user['personal_info']['id']) }}" title="View Profile">
                                                    <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                                <div class="action-icons">
                                                    <form action="{{ route('destroy', $user['personal_info']['id']) }}" method="post" class="d-inline">
                                                    @csrf
                                                    <a href="javascript::void(0)" onclick="confirm_form_delete(this)"
                                                        class="del_btn" title="Delete Profile">
                                                        <i class="fas fa-user-minus text-danger"></i>
                                                    </a>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @php
                                        $count++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>


    </main>
{{ view('layouts/footer')}}

