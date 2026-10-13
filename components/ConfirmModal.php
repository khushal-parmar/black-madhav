<?php
/**
 * ConfirmModal Component
 */
function renderConfirmModal($modalId = 'confirm-modal', $title = 'Confirm Delete', $message = 'Are you sure you want to delete this item? This action cannot be undone.') {
    ?>
    <div id="<?= $modalId ?>" class="hidden fixed inset-0 z-50 flex items-center justify-center">
      <div class="modal-backdrop absolute inset-0 bg-black/40"></div>
      <div class="relative z-10 w-full max-w-md rounded-xl bg-white p-6 shadow-lg mx-4">
        <h3 class="modal-title text-lg font-semibold text-slate-900"><?= e($title) ?></h3>
        <p class="modal-message mt-3 text-sm text-slate-600"><?= e($message) ?></p>
        <div class="mt-6 flex justify-end gap-3">
          <button type="button" class="btn-cancel rounded-md px-4 py-2 border border-slate-300 text-slate-700 hover:bg-slate-50 transition">Cancel</button>
          <button type="button" class="btn-confirm rounded-md bg-rose-600 px-4 py-2 text-white hover:bg-rose-700 transition">Delete</button>
        </div>
      </div>
    </div>
    <?php
}
