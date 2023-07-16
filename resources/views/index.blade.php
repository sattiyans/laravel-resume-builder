{{ view('layouts/header')}}
<div class="container">
    <main>
        {{ view('components/title')}}
        <div class="mb-3 d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Resume list</h4>
            <a href="create" class="btn btn-primary" type="button">Create resume <i class="fas fa-plus"></i></a>
        </div>
        <table id="user_table" class="table table-bordered table-striped text-center">
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
                                    <a target="_blank" class="view_btn text-decoration-none" href="{{ route('resume.profile.view', $user['personal_info']['id']) }}" title="View Profile">
                                    View <i class="fas fa-up-right-from-square"></i>
                                    </a>
                                </div>
                                <div class="action-icons">
                                    <form action="{{ route('destroy', $user['personal_info']['id']) }}" method="post" class="d-inline">
                                    @csrf
                                    <a href="javascript::void(0)" onclick="confirm_form_delete(this)"
                                        class="del_btn text-decoration-none text-danger" title="Delete Profile">
                                        Delete <i class="fas fa-trash text-danger"></i>
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
</div>
{{ view('layouts/footer')}}

