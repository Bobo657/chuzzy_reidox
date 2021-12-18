
<li class="dropdown notification-list">
    <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <i class="ti ti-bell"></i>
        <span class="alert-badge"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">

        <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
            Unread <span class="badge bg-soft-primary badge-pill">  ({{ count($notifications)}})</span>
        </h6> 
        <div class="notification-menu" data-simplebar>
            <!-- item-->
            @foreach($notifications as $notification)
            <a href="#" class="dropdown-item py-3">
                <small class="float-end text-muted ps-2">{{ $notification->created_at->diffForHumans() }}</small>
                <div class="media">
                    <div class="avatar-md bg-soft-primary">
                        <i class="ti ti-chart-arcs"></i>
                    </div>
                    <div class="media-body align-self-center ms-2 text-truncate">
                        <h6 class="my-0 fw-normal text-dark">{{ $notification->data['subject'] }}</h6>
                        <small class="text-muted mb-0">{{ $notification->data['message'] }}.</small>
                    </div><!--end media-body-->
                </div><!--end media-->
            </a><!--end-item-->
            <!-- item-->
           @endforeach
        </div>
        <!-- All-->
        <a href="javascript:void(0);" class="dropdown-item text-center text-primary" wire:click.prevent="markAsRead()">
            Mark all as read <i class="fi-arrow-right"></i>
        </a>
    </div>
</li>