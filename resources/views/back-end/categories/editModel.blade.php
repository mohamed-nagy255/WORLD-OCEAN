<!-- Modal -->
<div class="modal fade" id="update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">تعديل فئة</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('category.update') }}" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <input type="hidden" name="image" id="image">
                    <div class="mb-3">
                        <label for="exampleInput" class="form-label">اسم الفئة</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">الصورة</label>
                        <input type="file" name="image" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                    <button type="submit" class="btn btn-primary">حفظ</button>
                </div>
            </form>
        </div>
    </div>
</div>
