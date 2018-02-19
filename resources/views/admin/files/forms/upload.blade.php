
    <div class="form-group">
        {!! Form::label('title', 'Name') !!}
        {!!  Form::text('title',null, array('class' => 'form-control','placeholder'=>'File name', 'required'))   !!}
    </div>
    <div class="form-group">
        {!! Form::label('type', 'Type') !!}
        <select class="form-control select" id="type" name="type">
            <option></option>
            @foreach($types as $type)
                <option  value="{{ $type->id }}">{{ $type->title }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        {!! Form::label('class', 'Class') !!}
        <select class="form-control select" id="class" name="class">
            <option></option>
        @foreach($classes as $item)
                <option  value="{{ $item->id }}">{{ $item->title }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        {!! Form::label('subject', 'Subject') !!}
        <select class="form-control select" id="subject" name="subject">

        </select>
    </div>
    <div class="form-group">
        {!! Form::label('file', 'File (doc / pdf)') !!}
        <input type="file" id="test" name="test" class="form-control" accept=".pdf,.doc"/>
    </div>


