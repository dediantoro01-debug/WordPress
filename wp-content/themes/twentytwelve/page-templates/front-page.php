<?php get_header(); ?>

<style>

body{
    font-family: Arial;
    background:#f4f4f4;
    margin:0;
}

.container{
    width:1200px;
    margin:auto;
}

/* HEADER HERO */
.hero{
    background:#111;
    color:#fff;
    padding:40px;
    display:flex;
    justify-content:space-between;
}

.hero h1{
    font-size:40px;
}

.hero .btn{
    background:red;
    padding:10px 20px;
    color:#fff;
    text-decoration:none;
}

/* GRID NEWS */
.grid{
    display:grid;
    grid-template-columns:2fr 1fr;
    gap:20px;
    margin-top:20px;
}

.card{
    background:#fff;
    padding:15px;
    border-radius:10px;
}

/* TRENDING */
.trending{
    background:#fff;
    padding:15px;
    border-radius:10px;
}

.tag{
    background:red;
    color:#fff;
    padding:3px 8px;
    font-size:12px;
}

</style>

<div class="hero container">

    <div>
        <h1>🔥 Berita Bola Terbaru 2026</h1>
        <p>Update Liga Inggris, Champions League, & Piala Dunia</p>
        <a class="btn" href="/bola">Lihat Semua Berita</a>
    </div>

    <div>
        <h3>⚽ Match Hari Ini</h3>
        <p>Real Madrid vs Barcelona</p>
        <p>Manchester City vs Arsenal</p>
    </div>

</div>

<div class="container grid">

    <!-- BERITA UTAMA -->
    <div>

        <h2>📰 Berita Terbaru</h2>

        <?php
        $query = new WP_Query(array(
            'posts_per_page' => 5
        ));

        while($query->have_posts()){
            $query->the_post();
        ?>

        <div class="card">

            <span class="tag">BOLA</span>

            <h3>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h3>

            <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>

        </div>

        <?php } wp_reset_postdata(); ?>

    </div>

    <!-- SIDEBAR -->
    <div>

        <div class="trending">

            <h3>🔥 Trending</h3>

            <ul>
                <li>Prediksi Bola 2026</li>
                <li>Transfer Pemain Terbaru</li>
                <li>Top Skor Liga Inggris</li>
                <li>Jadwal Piala Dunia</li>
            </ul>

        </div>

        <br>

        <div class="trending">

            <h3>🏆 Klasemen</h3>

            <p>Premier League</p>
            <p>La Liga</p>
            <p>Serie A</p>

        </div>

    </div>

</div>

<?php get_footer(); ?>
