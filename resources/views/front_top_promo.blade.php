  <div class="top-promo-banner" id="top-promo-banner">
    <div id="promo-content-container" class="hidden">
      @if (isset($top_bar_banner['img']))
        <a href="{{ $top_bar_banner['action_url'] ?? 'javascript::void(0)' }}">
          <img src="{{ get_storage_file_url($top_bar_banner['img'], 'full') }}" class="img-fit" alt="Topbar Banner">
        </a>
      @else
        <img src="{{ asset('images/placeholders/top_banner.png') }}" class="img-fit" alt="Topbar Banner">
      @endif

      <a href="javascript::void(0)" class="close-button">&times;</a>
    </div>
  </div>
