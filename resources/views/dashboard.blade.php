<!-- Song Playback Bar Container -->
<div class="song-playback-bar music-container" id="music-box">
    <div class="song-info" id="music-info">
        <audio id="disc"></audio>
        <div class="song-info-cover" id="cover-box">
            <img src="pic/peaches.jpeg" alt="Peaches_Kai" id="cover" />
        </div>

        <div class="song-details">
            <div class="song-title" id="title">Peaches</div>
            <div class="artist-name" id="artist">Kai</div>
        </div>
    </div>
    <!-- PLayback Controls Container -->
    <div class="playback-controls-container">
        <div class="playback-controls">
            <button class="shuffle-btn"><i class="fa fa-random" aria-hidden="true"></i></button>
            <div id="control-box">
                <i id="prev" class="btn fas fa-backward"></i>
                <i id="play" class="special-btn fas fa-play"></i>
                <i id="next" class="btn fas fa-forward"></i>
              </div>
            <button class="loop-btn"><i class="bi bi-repeat"></i></button>
        </div>
        <!-- Song Progress Bar Container -->
        <div class="song-progress-bar" id="timer-bar" >
            <span id="timer" class="time-display">0:00</span>
            <div class="progress-bar-container" id="progress-container">
                <div class="progress" id="progress"></div>
            </div>
            <span id="duration" class="time-display"></span>
        </div>



    </div>

    <!-- Controls Button Container -->
    <div class="controls-button">
        <button class="add-btn"><i class="bi bi-plus-circle"></i></button>
        <button class="queue-btn"><i class="bi bi-list"></i></button>
        <div class="volume-control">
            <button class="volume-btn"><i class="bi bi-volume-up-fill"></i></button>
            <input type="range" class="volume-slider" min="0" max="100" value="0">
        </div>
        <button class="share-btn"><i class="bi bi-share"></i></button>
    </div>
</div>

<script src="{{ asset('js/song_playback_bar.js') }}"></script>
@endsection
