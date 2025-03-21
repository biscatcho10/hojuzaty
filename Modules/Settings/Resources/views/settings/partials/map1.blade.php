@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="card-body">
    @if ((Settings::get('latitude1') != null) & (Settings::get('longitude1') != null))
        <div class="form-group">
            <label>@lang('Address')</label>
            <input type="text" name="address" class="form-control" value="{{ Settings::get('address') }}">
        </div>

        <div class="form-group">
            <label for="address_address">
                {{ __('Map Address') }}
            </label>
            <input type="text" id="address-input" name="map_address1" class="form-control map-input"
                value="{{ Settings::get('map_address1') }}">
            <input type="hidden" name="latitude1" id="address-latitude" value="{{ Settings::get('latitude1') }}" />
            <input type="hidden" name="longitude1" id="address-longitude" value="{{ Settings::get('longitude1') }}" />
        </div>
        <div id="address-map-container" style="width:100%;height:400px; ">
            <div style="width: 100%; height: 100%" id="address-map"></div>
        </div>
    @else
        <div class="form-group">
            <label>@lang('Address')</label>
            <input type="text" name="address" class="form-control" value="{{ Settings::get('address') }}">
        </div>
        <div class="form-group">
            <label for="address_address">
                {{ __('Map Address') }}
            </label>
            <input type="text" id="address-input" name="map_address1" class="form-control map-input">
            <input type="hidden" name="latitude1" id="address-latitude" value="0" />
            <input type="hidden" name="longitude1" id="address-longitude" value="0" />
        </div>
        <div id="address-map-container" style="width:100%;height:400px; ">
            <div style="width: 100%; height: 100%" id="address-map"></div>
        </div>
    @endif
</div>
