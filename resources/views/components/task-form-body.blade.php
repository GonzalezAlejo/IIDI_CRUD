@csrf
<div class="row">
    <div class="col-sm-12">
        <label for="Input Title" class="form-label"> Title of task</label>
        <input type="text" name="title" id="Input Title" class="form-control" placeholder="..." value="{{ old('title' , $task_to_edit->title)}}">
    </div>
    <div class="col-sm-12">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ old('description',$task_to_edit->description)}}</textarea>
    </div>
    <div class="col-sm-12 text-end my-2">
        <button type="submit" class="btn btn-primary">
            Save
        </button>
    </div>
</div>
