{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-th-list"></i> Users</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('transport') }}"><i class="nav-icon la la-th-list"></i> Transports</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('organizer') }}"><i class="nav-icon la la-th-list"></i> Organizers</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('tour') }}"><i class="nav-icon la la-th-list"></i> Tours</a></li>
