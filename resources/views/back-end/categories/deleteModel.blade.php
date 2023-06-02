<!-- Modal -->
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">حذف فئة</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('category.destroy') }}" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="exampleInput" class="form-label">هل انت متاكد من حذف هذة الفئة</label>
                        <input type="text" name="name" class="form-control" id="name" readonly 
                        style="border: none; outline: none;">
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                    <button type="submit" class="btn btn-danger">حذف</button>
                </div>
            </form>
        </div>
    </div>
</div>
