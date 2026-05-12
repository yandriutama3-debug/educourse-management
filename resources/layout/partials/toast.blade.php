{{-- resources/views/partials/toast.blade.php --}}
<div class="toast-container position-fixed top-0 end-0 p-3">
    <div id="appToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive">
        <div class="d-flex">
            <div class="toast-body" id="toastMessage">
                Operasi berhasil dilakukan!
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
        </div>
    </div>
</div>