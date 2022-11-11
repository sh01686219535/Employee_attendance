<aside class="sidebar-wrapper">
    <div class="iconmenu">
        <div class="nav-toggle-box">
            <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
        </div>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Employees">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#dashboard" type="button"><i class="bi bi-house-door-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="EmployeeDetails">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#emplyoee_details" type="button"><i class="bi bi-house-door-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="EmployeeContact">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#emplyoee_contact" type="button"><i class="bi bi-house-door-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="EmployeeAttendance">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#emplyoee_attendance" type="button"><i class="bi bi-house-door-fill"></i></button>
            </li>
        </ul>
    </div>
    <div class="textmenu">
        <div class="brand-logo">
            <a href="{{route('dashboard')}}">
                <img src="{{asset('adminAsset')}}/assets/images/brand-logo-2.png" width="140" alt=""/>

            </a>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="dashboard">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Employees</h5>
                        </div>
                    </div>
                    <a href="{{route('add-employee')}}" class="list-group-item"><i class="bi bi-wallet"></i>Add Employee</a>
                    <a href="{{route('manage-employee')}}" class="list-group-item"><i class="bi bi-bar-chart-line"></i>Manage Employee</a>
                </div>
            </div>
            <div class="tab-pane fade" id="emplyoee_details">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">EmployeeDetails</h5>
                        </div>
                    </div>
                    <a href="{{route('add-employeeDetails')}}" class="list-group-item"><i class="bi bi-wallet"></i>Add EmployeeDetails</a>
                    <a href="{{route('manage-employeeDetails')}}" class="list-group-item"><i class="bi bi-bar-chart-line"></i>Manage EmployeeDetails</a>
                </div>
            </div>
            <div class="tab-pane fade" id="emplyoee_contact">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">EmployeeContact</h5>
                        </div>
                    </div>
                    <a href="{{route('add-employeeContact')}}" class="list-group-item"><i class="bi bi-wallet"></i>Add EmployeeContact</a>
                    <a href="{{route('manage-employeeContact')}}" class="list-group-item"><i class="bi bi-bar-chart-line"></i>Manage EmployeeContact</a>
                </div>
            </div>
            <div class="tab-pane fade" id="emplyoee_attendance">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">EmployeeAttendance</h5>
                        </div>
                    </div>
                    <a href="{{route('employeeAttendance')}}" class="list-group-item"><i class="bi bi-wallet"></i>EmployeeAttendance</a>
                </div>
            </div>
        </div>
    </div>
</aside>
