<div class="card-content">
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label required">عنوان الجدول </label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                   <input type="text" name="title">
                </div>
            </div>
        </div>
    </div>
</hr>
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label required">السنه</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    <div class="select is-fullwidth">
                        {!! Form::select('year_id', $years, null, ['required']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</hr>
<div class="field is-horizontal">
    <div class="field-label is-normal">
        <label class="label required">القسم </label>
    </div>
    <div class="field-body">
        <div class="field">
            <div class="control">
                <div class="select is-fullwidth">
                    {!! Form::select('department_id', $departments, null, ['required']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
</hr>
</hr>
<div class="field is-horizontal">
    <div class="field-label is-normal">
        <label class="label required">اختيار الخدمة</label>
    </div>
    <div class="field-body">
        <div class="field">
            <div class="control">
                <div class="select is-fullwidth">
                    {!! Form::select('service_id', $sections, null, ['required']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
</hr>
<div class="field is-horizontal">
    <div class="field-label is-normal">
        <label class="label required">صورة الجدول </label>
    </div>
    <div class="field-body">
        <div class="field">
            <div class="control">
                <uploader label="صورة الجدول" name="image" @if (isset($exam))
                file="{{ $exam->image }}" @endif></uploader>            </div>
        </div>
    </div>
</div>
<div class="card-footer">
    <div class="buttons has-addons">
        <a class="button is-info" href="{{ route('admin.exams.index') }}"> الغاء </a>
        <button type="submit" class="button is-success" href="{{ route('admin.exams.index') }}">حفظ</button>
    </div>
  </div>
</div>
