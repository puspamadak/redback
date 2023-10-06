<section id="stats_sec" class="col">
    <link rel="stylesheet" href="<?= ASSET['css'] ?>workout/stats.css" />
    <script src="<?= ASSET['js'] ?>field/select.js" type="module"></script>

    <div class="controls row jcr">
        <select-box class="month-opt">
            <button slot="button" class="btn t"></button>
            <button class="btn t" selected>January</button>
            <button class="btn t">February</button>
            <button class="btn t">March</button>
            <button class="btn t">April</button>
        </select-box>
    </div>
    <div class="count top">
        <output id="total_km">30.14</output>
        <span>Total kilometers</span>
    </div>
    <div class="count-grid">
        <div class="count">
            <output id="avg_kcal">1458.6</output>
            <span>Avg Kcal</span>
        </div>
        <div class="count">
            <output id="total_run">7</output>
            <span>Total run</span>
        </div>
        <div class="count">
            <output id="avg_time">00:02:12</output>
            <span>Average time</span>
        </div>
        <div class="count">
            <output id="avg_pace">6`23</output>
            <span>Average pace</span>
        </div>
    </div>
</section>