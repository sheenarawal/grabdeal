@extends('frontend.dashboard_layout')

@section('frontend_dashboard')


    <div class="dashboard-tab cart-wrapper p-5 bg-white rounded-lg shadow-xs">
    <div class="row">
        <div class="col-lg-4 offset-sm-4 text-center">
            <figure class="avatar ml-auto mr-auto mb-0 mt-2 w100"><img src="{{asset('frontend/images/t-1.jpg')}}" alt="image"
                                                                       class="shadow-sm rounded-lg w-100"></figure>
            <h2 class="fw-900 font-sm text-grey-900 mt-3">{{ucfirst($user->name)}}</h2>
            <h4 class="text-grey-500 fw-500 mb-3 font-xsss mb-4">{{user_type($user->role)}}</h4>
            <!-- <a href="#" class="p-3 alert-primary text-primary font-xsss fw-500 mt-2 rounded-lg">Upload New Photo</a> -->
        </div>
    </div>
    <form action="{{route('frontend.profile')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-6 mb-3">
                <div class="form-gorup">
                    <label class="mont-font fw-600 font-xsss" for="name">First Name</label>
                    <input type="text" name="profile_name" id="name" value="{{$user->name}}"
                           class="form-control @error('profile_name') is-invalid @enderror">
                    @error('profile_name')
                    <span class="text-danger h5">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 mb-3">
                <div class="form-gorup">
                    <label class="mont-font fw-600 font-xsss" for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" value="{{$user->last_name}}"
                           class="form-control @error('last_name') is-invalid @enderror">
                    @error('last_name')
                    <span class="text-danger h5">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 mb-3">
                <div class="form-gorup">
                    <label class="mont-font fw-600 font-xsss" for="email">Email</label>
                    <input type="text" name="profile_email" id="email" value="{{$user->email}}" readonly
                           class="form-control @error('profile_email') is-invalid @enderror">
                    @error('profile_email')
                    <span class="text-danger h5">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 mb-3">
                <div class="form-gorup">
                    <label class="mont-font fw-600 font-xsss" for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" value="{{$user->mobile}}" readonly
                           class="form-control @error('phone') is-invalid @enderror">
                    @error('phone')
                    <span class="text-danger h5">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-12 mb-3">
                <div class="form-gorup">
                    <label class="mont-font fw-600 font-xsss" for="country">Country</label>
                    <input type="text" name="country" id="country" value="{{$user->country}}"
                           class="form-control @error('country') is-invalid @enderror">
                    @error('country')
                    <span class="text-danger h5">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-12 mb-3">
                <div class="form-gorup">
                    <label class="mont-font fw-600 font-xsss" for="address">Address</label>
                    <input type="text" name="address" id="address" value="{{$user->address}}"
                           class="form-control @error('address') is-invalid @enderror">
                    @error('address')
                    <span class="text-danger h5">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 mb-3">
                <div class="form-gorup">
                    <label class="mont-font fw-600 font-xsss" for="city">Town / City</label>
                    <input type="text" name="city" id="city" value=""
                           class="form-control @error('city') is-invalid @enderror">
                    @error('city')
                    <span class="text-danger h5">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 mb-3">
                <div class="form-gorup">
                    <label class="mont-font fw-600 font-xsss" for="postcode">Postcode</label>
                    <input type="text" name="postcode" id="postcode" class="form-control @error('postcode') is-invalid @enderror">
                    @error('postcode')
                    <span class="text-danger h5">{{$message}}</span>
                    @enderror
                </div>
            </div>

            {{--<div class="col-lg-12 mb-3 ">
                <div class="card mt-3 border-0">
                    <div class="card-body d-flex justify-content-between align-items-end p-0">
                        <div class="form-group mb-0 w-100">
                            <input type="file" name="file" id="file" class="input-file">
                            <label for="file"
                                   class="rounded-lg text-center bg-white btn-tertiary js-labelFile p-4 w-100 border-dashed">
                                <i class="ti-cloud-down large-icon mr-3 d-block"></i>
                                <span class="js-fileName">Drag and drop or click to replace</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>--}}

            <div class="col-lg-12 mb-3">
                <label class="mont-font fw-600 font-xsss" for="description">Description</label>
                <textarea class="form-control mb-0 p-3 h100 bg-greylight lh-16  @error('description') is-invalid @enderror"
                          rows="5" placeholder="Write your message..." id="description"></textarea>
                @error('description')
                <span class="text-danger h5">{{$message}}</span>
                @enderror
            </div>

            <div class="col-lg-12 mb-5">
                <button type="submit" class="btn btn-primary col-md-2 py-2">Update</button>
            </div>
        </div>

    </form>
    <div class="row d-none">
            <div class="col-lg-12">
                <h4 class="mb-4 font-xs fw-700 mont-font">Social Network</h4>
            </div>
            <div class="col-lg-6 mb-3">
                <div class="form-gorup">
                    <label class="mont-font fw-600 font-xsss" for="facebook">Facebook</label>
                    <input type="text" name="facebook" id="facebook" class="form-control @error('facebook') is-invalid @enderror">
                    @error('facebook')
                    <span class="text-danger h5">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 mb-3">
                <div class="form-gorup">
                    <label class="mont-font fw-600 font-xsss" for="twitter">Twitter</label>
                    <input type="text" name="twitter" id="twitter" class="form-control @error('twitter') is-invalid @enderror">
                    @error('twitter')
                    <span class="text-danger h5">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-12 mb-5 mt-2">
                <a href="#"
                   class="bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block">Save</a>
            </div>
        </div>
</div>


@stop
@push('frontend_css')
@endpush
@push('frontend_script')

    <script
        src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCOdKtT5fapH3_OfhV3HFeZjqFs4OfNIew&amp;callback=mapinitialize"
        type="text/javascript"></script>
    <script type="text/javascript">
        function mapinitialize() {
            var latlng = new google.maps.LatLng(-33.86938, 151.104000);
            var myOptions = {
                zoom: 12,
                center: latlng,
                scrollwheel: false,
                scaleControl: false,
                disableDefaultUI: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                // Google Map Color Styles
                styles: [{
                    "featureType": "all",
                    "elementType": "all",
                    "stylers": [{"visibility": "on"}]
                }, {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [{"color": "#444444"}]
                }, {
                    "featureType": "administrative.province",
                    "elementType": "all",
                    "stylers": [{"visibility": "off"}]
                }, {
                    "featureType": "administrative.locality",
                    "elementType": "all",
                    "stylers": [{"visibility": "off"}]
                }, {
                    "featureType": "administrative.neighborhood",
                    "elementType": "all",
                    "stylers": [{"visibility": "off"}]
                }, {
                    "featureType": "administrative.land_parcel",
                    "elementType": "all",
                    "stylers": [{"visibility": "off"}]
                }, {
                    "featureType": "administrative.land_parcel",
                    "elementType": "labels.text",
                    "stylers": [{"visibility": "off"}]
                }, {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [{"color": "#f2f2f2"}]
                }, {
                    "featureType": "landscape.man_made",
                    "elementType": "all",
                    "stylers": [{"visibility": "simplified"}]
                }, {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [{"visibility": "off"}, {"color": "#cee9de"}, {"saturation": "2"}, {"weight": "0.80"}]
                }, {
                    "featureType": "poi.attraction",
                    "elementType": "geometry.fill",
                    "stylers": [{"visibility": "off"}]
                }, {
                    "featureType": "poi.park",
                    "elementType": "all",
                    "stylers": [{"visibility": "on"}]
                }, {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [{"saturation": -100}, {"lightness": 45}]
                }, {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [{"visibility": "simplified"}]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [{"visibility": "on"}, {"color": "#f5d6d6"}]
                }, {
                    "featureType": "road.highway",
                    "elementType": "labels.text",
                    "stylers": [{"visibility": "off"}]
                }, {
                    "featureType": "road.highway",
                    "elementType": "labels.icon",
                    "stylers": [{"hue": "#ff0000"}, {"visibility": "on"}]
                }, {
                    "featureType": "road.highway.controlled_access",
                    "elementType": "labels.text",
                    "stylers": [{"visibility": "simplified"}]
                }, {
                    "featureType": "road.highway.controlled_access",
                    "elementType": "labels.icon",
                    "stylers": [{"visibility": "on"}, {"hue": "#0064ff"}, {"gamma": "1.44"}, {"lightness": "-3"}, {"weight": "1.69"}]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "all",
                    "stylers": [{"visibility": "on"}]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "labels.text",
                    "stylers": [{"visibility": "off"}]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [{"visibility": "off"}]
                }, {
                    "featureType": "road.local",
                    "elementType": "all",
                    "stylers": [{"visibility": "on"}]
                }, {
                    "featureType": "road.local",
                    "elementType": "labels.text",
                    "stylers": [{"visibility": "simplified"}, {"weight": "0.31"}, {"gamma": "1.43"}, {"lightness": "-5"}, {"saturation": "-22"}]
                }, {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [{"visibility": "off"}]
                }, {
                    "featureType": "transit.line",
                    "elementType": "all",
                    "stylers": [{"visibility": "on"}, {"hue": "#ff0000"}]
                }, {
                    "featureType": "transit.station.airport",
                    "elementType": "all",
                    "stylers": [{"visibility": "simplified"}, {"hue": "#ff0045"}]
                }, {
                    "featureType": "transit.station.bus",
                    "elementType": "all",
                    "stylers": [{"visibility": "on"}, {"hue": "#00d1ff"}]
                }, {
                    "featureType": "transit.station.bus",
                    "elementType": "labels.text",
                    "stylers": [{"visibility": "simplified"}]
                }, {
                    "featureType": "transit.station.rail",
                    "elementType": "all",
                    "stylers": [{"visibility": "simplified"}, {"hue": "#00cbff"}]
                }, {
                    "featureType": "transit.station.rail",
                    "elementType": "labels.text",
                    "stylers": [{"visibility": "simplified"}]
                }, {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [{"color": "#46bcec"}, {"visibility": "on"}]
                }, {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [{"weight": "1.61"}, {"color": "#cde2e5"}, {"visibility": "on"}]
                }]
            };
            var map = new google.maps.Map(document.getElementById("map"), myOptions);

            var image = "images/map-marker.png";
            var image = new google.maps.MarkerImage("images/map-marker.png", null, null, null, new google.maps.Size(50, 50));
            var marker = new google.maps.Marker({
                map: map,
                icon: image,
                position: map.getCenter()
            });

            var contentString = '<b>Office</b><br>Streetname 13<br>50001 Sydney';
            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            google.maps.event.addListener(marker, 'click', function () {
                infowindow.open(map, marker);
            });


        }

        mapinitialize();
    </script>
@endpush
