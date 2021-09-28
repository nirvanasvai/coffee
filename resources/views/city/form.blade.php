<div class="shadow card">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-6">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Назад</a>
            </div>
            <div class="col-sm-6">
                <button type="submit" class="btn btn-primary float-right">Сохранить</button>
            </div>
        </div>

    </div>
</div>

<div class="card mt-3">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab"
                   aria-controls="general" aria-selected="true"><i class="fas fa-home"></i> Основные</a>
            </li>
        </ul>
    </div>
    <div class="card-body">

        <div class="tab-content" id="myTabContent">

            <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">

                <div class="form-group">
                    <label for="">Название города</label>
                    <input type="text" class="form-control" name="name" placeholder="Название"
                           value="@if(old('name')){{old('name')}}@else{{$city->name ?? ""}}@endif" required>
                </div>
                <div class="form-group">
                    <label for="1">100%
                        <input type="radio" class="custom-radio" name="status" value="1">
                    </label>
                    <label for="2">50%
                        <input type="radio" class="custom-radio" name="status" value="2">
                    </label>
                    <label for="3">30%
                        <input type="radio" class="custom-radio" name="status" value="3">
                    </label>
                </div>
            </div>

        </div>
    </div>
</div>
