<div class="col-xl-3 col-lg-4 col-md-6 mt-4">
    <div class="card bg-transparent border-0 text-center">
        <div class="card-img">
           @if ($member->image)
              <img loading="lazy" decoding="async" src="https://picsum.photos/200" alt="team member" class="img-fluid rounded-md mb-4">
           @else
              <img loading="lazy" decoding="async" src="storage/app/private/01KA5GXMKY5D7EZC8T1V6QA4CZ.webp" alt="team member" class="img-fluid rounded-circle mb-4">                
           @endif
            <ul class="card-social list-inline">
              @if ($member->fb_url)
                <li class="list-inline-item"><a class="facebook" target="_blank" href="{{ $member->fb_url }}"><i
                            class="fab fa-facebook-f"></i></a>
                </li>
                  
              @endif
                @if ($member->tw_url)
                         <li class="list-inline-item"><a class="twitter" target="_blank" href="{{ $member->tw_url }}"><i
                                    class="fab fa-twitter"></i></a>
                        </li>
                @endif
                @if ($member->in_url)
                <li class="list-inline-item"><a class="instagram" target="_blank" href="{{ $member->in_url }}"><i
                            class="fab fa-instagram"></i></a>
                </li>
                @endif
            </ul>
        </div>
        <div class="card-body">
            <h3>{{ $member->name }}</h3>
            <p>{{ $member->designation }}</p>
        </div>
    </div>
</div>
