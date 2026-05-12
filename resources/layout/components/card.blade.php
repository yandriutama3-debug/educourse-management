{{-- ══════════════════════════════════════════════════════════════
     resources/views/components/card.blade.php
     Usage:
     <x-card title="Judul" icon="bi-star">
         Konten di sini
     </x-card>
     ══════════════════════════════════════════════════════════════ --}}
@props(['title' => '', 'icon' => '', 'footer' => ''])

<div {{ $attributes->merge(['class' => 'card shadow-sm border-0 h-100']) }}>
    @if($title)
    <div class="card-header bg-transparent border-bottom fw-semibold">
        @if($icon) <i class="bi {{ $icon }} me-2 text-primary"></i> @endif
        {{ $title }}
    </div>
    @endif

    <div class="card-body">
        {{ $slot }}
    </div>

    @if($footer)
    <div class="card-footer text-muted small bg-transparent">
        {{ $footer }}
    </div>
    @endif
</div>