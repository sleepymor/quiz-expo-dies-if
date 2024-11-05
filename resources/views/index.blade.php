<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/scss/app.scss'])
</head>
<body class="font-sans antialiased">
    <div class="parallax-wrapper">
        <header class="welcome">
            <img src="{{ asset('images/background/mainBg.svg') }}" alt="Bottom Bush">
            <img src="{{ asset('images/background/leftTree.svg') }}" alt="Bottom Bush">
            <img src="{{ asset('images/background/rightTree.svg') }}" alt="Bottom Bush">
            <img src="{{ asset('images/background/bottomBush.svg') }}" alt="Bottom Bush">
            <div class="jumbo-content" >
                <h2>WELCOME</h2>
                <button class="popping-btn z-20" onclick="buttonPop(this)">
                    <img id="playButton" src="{{ asset('images/icons/playButton.png') }}" alt="Gambar play button">
                </button>
            </div>
        </header>
        <section class="content text-white z-50 h-[500px]">
            <div class="score">
                <h3 class="animated-pop">Top Scores</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae error dolorem consequatur voluptate, dicta quo, corrupti asperiores ratione nulla tempore hic itaque quidem laudantium labore. Magni, earum? Similique minima minus veniam iure velit neque incidunt quo quam perspiciatis. Sapiente ipsa dolorem, esse alias dignissimos error vero repellat sed repellendus suscipit at reprehenderit officia amet odit quod iure quibusdam adipisci inventore officiis? Fuga cumque, magni numquam commodi quam eaque dolore laborum vel doloribus consequuntur tenetur excepturi sapiente quod nostrum. Architecto mollitia nobis ratione numquam doloremque dolorum aperiam optio natus odit facilis recusandae ex laborum illo reprehenderit, esse omnis deleniti! Culpa, temporibus ducimus veritatis consequatur optio sed, excepturi repudiandae sit maxime quas sunt sint iure harum necessitatibus quisquam ab ipsa ullam ex soluta rem nam? Nemo, a quaerat? Recusandae commodi quasi, itaque nobis minus, ad placeat, fuga molestias inventore in pariatur esse totam assumenda? Est perspiciatis natus cumque temporibus labore doloribus sed cupiditate odio quod sit fuga, similique nobis quidem repellendus quam voluptas culpa rem harum nisi. Voluptatem adipisci dolorem temporibus quia ipsa! Quo, quod non dolorem vel omnis excepturi corrupti, iure porro corporis, voluptatem reprehenderit vero distinctio. Enim totam voluptatum cupiditate obcaecati! Est cum in, nulla earum atque fugiat sint non eveniet quo sed recusandae dolorum molestias eius dolores alias, asperiores reiciendis sapiente voluptates provident. Tenetur quas nihil sit id perferendis recusandae alias quos hic unde nesciunt commodi, deleniti blanditiis quisquam nostrum! Quos voluptatem modi, rem temporibus aperiam consequatur tempora quisquam eos molestiae repudiandae ipsum esse eaque autem possimus aliquid totam laborum ex delectus illum eveniet? Ipsum ad ratione laudantium. Placeat asperiores ex perferendis natus numquam ut in, blanditiis sed voluptatibus tempora harum alias dolore qui libero quia provident consequuntur laborum, animi accusantium assumenda ipsam! Deserunt maiores qui enim temporibus porro pariatur. Neque iusto totam sit sed assumenda vero omnis consectetur voluptate. Non voluptatum unde assumenda officia! Tempore dolorum quam minus! Nemo, rerum praesentium. Eveniet excepturi cumque tenetur laudantium totam cupiditate maxime. Culpa voluptate corrupti veniam obcaecati dolorem, dolore eveniet iusto repellat, optio deleniti minus in praesentium aspernatur mollitia inventore. Expedita voluptas reprehenderit est nam natus libero aliquam exercitationem magnam id labore qui quam odio vel mollitia minima quod, magni aspernatur repellendus itaque ullam nulla perspiciatis impedit necessitatibus! Alias ratione neque omnis deleniti veritatis voluptatem, libero maxime explicabo ipsum vel quis eos aliquid cum molestias aspernatur dolore dolor expedita ex dicta. Voluptate reiciendis deserunt provident. Commodi, fuga laudantium blanditiis ex tempore iste amet repellendus. Itaque voluptatem laboriosam sunt perferendis ipsam magnam eos obcaecati nostrum nobis, exercitationem qui enim, soluta vitae commodi molestias, neque dignissimos rem accusamus non pariatur doloribus? Sequi quam, cupiditate, tempora eligendi consequatur inventore reiciendis fugiat sint nobis error corrupti quasi ratione recusandae saepe est dolorem repudiandae aliquam culpa aspernatur non maxime dolore! Nisi veritatis sunt deleniti. Assumenda cupiditate alias velit hic quae sed provident obcaecati corrupti placeat aperiam tempore vel quod architecto repellat, commodi laborum molestiae ducimus repellendus optio molestias nisi cumque nihil ad? Excepturi eum tempore praesentium quibusdam. Ea obcaecati laudantium odio quibusdam explicabo eligendi minima magni.</p>
            </div>
        </section>
    </div>
</body>
</html>