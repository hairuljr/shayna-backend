<aside id="left-panel" class="left-panel">
  <nav class="navbar navbar-expand-sm navbar-default">
      <div id="main-menu" class="main-menu collapse navbar-collapse">
          <ul class="nav navbar-nav">
              <li class="{{ Route::currentRouteName() == 'dashboard' ? 'active' :'' }}">
                  <a href="{{ route('dashboard') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
              </li>
              <li class="menu-title">Produk</li><!-- /.menu-title -->
              <li class="{{ Route::currentRouteName() == 'products.index' || Route::currentRouteName() == 'products.edit' ? 'active' :'' }}">
                <a href="{{ route('products.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Produk</a>
              </li>
              <li class="{{ Route::currentRouteName() == 'products.create' ? 'active' :'' }}">
                  <a href="{{ route('products.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Produk</a>
              </li>

              <li class="menu-title">Foto Produk</li><!-- /.menu-title -->
              <li class="{{ Route::currentRouteName() == 'product-galleries.index' || Route::currentRouteName() == 'products.gallery' ? 'active' :'' }}">
                  <a href="{{ route('product-galleries.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Foto Produk</a>
              </li>
              <li class="{{ Route::currentRouteName() == 'product-galleries.create' ? 'active' :'' }}">
                  <a href="{{ route('product-galleries.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Foto Produk</a>
              </li>

              <li class="menu-title">Transaksi</li><!-- /.menu-title -->
              <li class="{{ Route::currentRouteName() == 'transactions.index' || Route::currentRouteName() == 'transactions.edit' ? 'active' :'' }}">
                  <a href="{{ route('transactions.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Transaksi</a>
              </li>
          </ul>
      </div><!-- /.navbar-collapse -->
  </nav>
</aside>