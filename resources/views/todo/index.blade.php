@extends('layouts.mysf')
@section('page', 'Todo List')
@section('content')

    <div class="section-body">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center">
                <ul class="nav nav-tabs page-header-tab">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#todo-list">ToDo
                            List</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#todo-assigned-by-me">Assigned
                            By Me</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#todo-assigned-to-me">Assigned
                            To Me</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#todo-add">Add Todo</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section-body mt-3">
        <div class="container-fluid">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="todo-list" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive todo_list">
                                <table class="table table-hover table-striped table-vcenter mb-0 text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Tasks</th>
                                            <th class="w150 text-right">Due Date</th>
                                            <th class="w100">Status</th>
                                            <th class="w80"><i class="icon-user"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tasks as $task)
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            name="example-checkbox1" value="option1"
                                                            {{ $task->status == TASK_STATUS_DONE ? 'checked' : '' }}>
                                                        <span class="custom-control-label">{{ $task->title }}</span>
                                                    </label>
                                                </td>
                                                <td class="text-right">{{ $task->due_date }}</td>
                                                @if ($task->status == TASK_STATUS_PENDING)
                                                    <td><span class="tag tag-danger ml-0 mr-0">Pending</span></td>
                                                @elseif($task->status==TASK_STATUS_ONIT)
                                                    <td><span class="tag tag-info ml-0 mr-0">On It</span></td>
                                                @else($task->status==TASK_STATUS_DONE)
                                                    <td><span class="tag tag-success ml-0 mr-0">Done</span></td>
                                                @endif
                                                <td>
                                                    <span class="avatar avatar-pink" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="Avatar Name">NG</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $tasks->links() }}
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="todo-assigned-by-me" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive todo_list">
                                <table class="table table-hover table-striped table-vcenter mb-0 text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Tasks</th>
                                            <th class="w80 text-right">Assigned To</th>
                                            <th class="w150 text-right">Due Date</th>
                                            <th class="w100">Status</th>
                                            <th class="w80"><i class="icon-user"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (Auth::user()->tasks()->orderBy('created_at', 'desc')->get()
        as $task)
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            name="example-checkbox1" value="option1"
                                                            {{ $task->status == TASK_STATUS_DONE ? 'checked' : '' }}>
                                                        <span class="custom-control-label">{{ $task->title }}</span>
                                                    </label>
                                                </td>

                                                <td class="text-right">{{ $task->assigned_user->name }}</td>
                                                <td class="text-right">{{ $task->due_date }}</td>
                                                @if ($task->status == TASK_STATUS_PENDING)
                                                    <td><span class="tag tag-danger ml-0 mr-0">Pending</span></td>
                                                @elseif($task->status==TASK_STATUS_ONIT)
                                                    <td><span class="tag tag-info ml-0 mr-0">On It</span></td>
                                                @else($task->status==TASK_STATUS_DONE)
                                                    <td><span class="tag tag-success ml-0 mr-0">Done</span></td>
                                                @endif
                                                <td>
                                                    <span class="avatar avatar-pink" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="Avatar Name">NG</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="todo-assigned-to-me" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive todo_list">
                                <table class="table table-hover table-striped table-vcenter mb-0 text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Tasks</th>
                                            <th class="w80 text-right">Assigned By</th>
                                            <th class="w150 text-right">Due Date</th>
                                            <th class="w150">Status</th>
                                            <th class="w80"><i class="icon-user"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (\App\Models\Task::where('assigned_to', Auth::user()->id)->orderBy('created_at', 'desc')->get()
        as $task)
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            name="example-checkbox1" value="option1"
                                                            {{ $task->status == TASK_STATUS_DONE ? 'checked' : '' }}>
                                                        <span class="custom-control-label">{{ $task->title }}</span>
                                                    </label>
                                                </td>
                                                <td class="text-right">{{ $task->user->name }}</td>
                                                <td class="text-right">{{ $task->due_date }}</td>
                                                <td>
                                                    <select id="status" onchange="updateStatus(this,{{ $task->id }})"
                                                        class="form-control show-tick" required>
                                                        <option value="">Change Status</option>
                                                        <option value="{{ TASK_STATUS_PENDING }}"
                                                            {{ $task->status == TASK_STATUS_PENDING ? 'selected' : '' }}>
                                                            Pending</option>
                                                        <option value="{{ TASK_STATUS_ONIT }}"
                                                            {{ $task->status == TASK_STATUS_ONIT ? 'selected' : '' }}>
                                                            On It</option>
                                                        <option value="{{ TASK_STATUS_DONE }}"
                                                            {{ $task->status == TASK_STATUS_DONE ? 'selected' : '' }}>
                                                            Done</option>
                                                    </select>
                                                <td>
                                                    <span class="avatar avatar-pink" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="Avatar Name">NG</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="todo-add" role="tabpanel">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add Todo</h3>
                            <div class="card-options ">
                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                        class="fe fe-chevron-up"></i></a>
                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                        class="fe fe-x"></i></a>
                            </div>
                        </div>
                        <form class="card-body" action="{{ route('task.store') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Todo Name <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="title" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Select Team <span
                                        class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <select name="assigned_to" class="form-control show-tick" required>
                                        <option value="">Select</option>
                                        @foreach (\App\Models\User::orderBy('name')->get() as $user)
                                            <option value="{{ $user['id'] }}">{{ $user['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Description <span
                                        class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <textarea name="description" rows="4" class="form-control no-resize"
                                        placeholder="Please type what you want..." required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Due <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <div class="input-daterange input-group" data-provide="datepicker">
                                        <input type="date" class="form-control" name="due_date" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label"></label>
                                <div class="col-md-7">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="submit" class="btn btn-outline-secondary">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function updateStatus(status, task_id) {
            var status = status.value;
            axios.put('{{ route('task.index') }}/' + task_id, {
                status: status
            }).then((response) => {
                toastr.success('Status updated successfully!', {
                    CloseButton: true,
                    ProgressBar: true
                });
            }).catch((error) => {
                console.log(error.response.data.message)
                toastr.error(error.response.data.message, {
                    CloseButton: true,
                    ProgressBar: true
                });
            });
        }
    </script>
@endsection
