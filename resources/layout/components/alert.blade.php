{{-- ══════════════════════════════════════════════════════════════
     resources/views/components/alert.blade.php
     Usage: <x-alert type="success" message="Berhasil!" />
     ══════════════════════════════════════════════════════════════ --}}
@props(['type' => 'info', 'message' => ''])

<div {{ $attributes->merge(['class' => "alert alert-{$type} alert-dismissible fade show", 'role' => 'alert']) }}>
    @switch($type)
        @case('success') <i class="bi bi-check-circle-fill me-2"></i> @break
        @case('danger')  <i class="bi bi-exclamation-triangle-fill me-2"></i> @break
        @case('warning') <i class="bi bi-exclamation-circle-fill me-2"></i> @break
        @default         <i class="bi bi-info-circle-fill me-2"></i>
    @endswitch
    {{ $message }}
    {{ $slot }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>