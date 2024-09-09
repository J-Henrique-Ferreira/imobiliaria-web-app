<label class="form-label " for="genericSelectCytyId">{{$labelText}}</label>
<select id="genericSelectCytyId" class="form-select form-control" name="{{$fieldName}}" required>
    @if (isset($atualCityId))
    <option value=""></option>
    @foreach ($citiesList as $city)
    <option @if ($atualCityId==$city->id) selected @endif value="{{$city->id}}">{{$city->name}}</option>
    @endforeach
    @else
    <option selected value=""></option>
    @foreach ($citiesList as $city)
    <option value="{{$city->id}}">{{$city->name}}</option>
    @endforeach
    @endif
</select>