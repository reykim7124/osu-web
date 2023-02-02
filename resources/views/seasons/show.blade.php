{{--
    Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
    See the LICENCE file in the repository root for full licence text.
--}}
@extends('rankings.index', [
    'country' => null,
    'hasFilter' => false,
    'hasMode' => false,
    'hasPager' => false,
    'hasScores' => false,
    'spotlight' => null,
    'titlePrepend' => osu_trans('rankings.type.seasons').': '.$seasonJson['name'],
    'type' => 'seasons',
])

@section('ranking-header')
    <div class="js-react--seasons-show"></div>
@endsection

@section ("script")
    @parent

    <script id="json-currentSeason" type="application/json">
        {!! json_encode($seasonJson) !!}
    </script>

    <script id="json-rooms" type="application/json">
        {!! json_encode($roomsJson) !!}
    </script>

    <script id="json-seasons" type="application/json">
        {!! json_encode($seasonsJson) !!}
    </script>

    @include('layout._react_js', ['src' => 'js/seasons-show.js'])
@endsection
