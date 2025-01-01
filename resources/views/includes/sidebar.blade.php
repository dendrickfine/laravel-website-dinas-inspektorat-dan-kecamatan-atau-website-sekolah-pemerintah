<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
						<img src="{{ asset('back/img/bandung.png') }}" alt="..." style="width: auto; height: 45px;">
						</div>
						<div class="info">
							<a>
								<span>
									SMA 
                                    <span>NEGERI BANDUNG</span>
								</span>
							</a>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item">
							<a data-toggle="collapse" href="/dashboard" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
                        <li class="nav-item"> 
                            <a href="{{ route('kategori.index') }}">
                                <i class="fas fa-tags"></i>
                                <p>Kategori</p>
                            </a>
                        </li>
						<li class="nav-item"> 
                            <a href="{{ route('artikel.index') }}">
                                <i class="fas fa-book"></i>
                                <p>Artikel</p>
                            </a>
                        </li>
						<li class="nav-item"> 
                            <a href="{{ route('playlist.index') }}">
                                <i class="fas fa-list"></i>
                                <p>Playlist</p>
                            </a>
                        </li>
						<li class="nav-item"> 
                            <a href="{{ route('iklan.index') }}">
                                <i class="fas fa-film"></i>
                                <p>Iklan</p>
                            </a>
                        </li>
						<li class="nav-item"> 
                            <a href="{{ route('slide.index') }}">
                                <i class="fas fa-desktop"></i>
                                <p>Slide Banner</p>
                            </a>
                        </li>
                        <li class="nav-item"> 
                            <a href="{{ route('materi.index') }}">
                                <i class="fas fa-lightbulb"></i>
                                <p>Materi</p>
                            </a>
                        </li>
                        <li class="nav-item"> 
                            <a href="{{ route('pengaduan.index') }}">
                                <i class="fas fa-trophy"></i>
                                <p>Pengaduan</p>
                            </a>
                        </li>
                        <li class="nav-item"> 
                            <a href="{{ route('wbs.index') }}">
                                <i class="fas fa-coins"></i>
                                <p>WBS!</p>
                            </a>
                        </li>
						<li class="nav-item">
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            <i class="fas fa-undo"></i>
                            {{ __('Logout') }}
                            </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                </form>
						</li>
					</ul>
				</div>
			</div>
		</div>