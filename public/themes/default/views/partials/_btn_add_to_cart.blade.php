<div class="feature-items-wishlist box-cart">
  <a href="javascript:void(0);" data-link="{{ route('cart.addItem', $item->slug) }}" class="btn-primary text-center sc-add-to-cart" tabindex="0">
    <i class="fal fa-shopping-cart"></i>
    <span class="d-none d-sm-inline-block ml-2">{{ trans('theme.add_to_cart') }}</span>
  </a>
</div>
