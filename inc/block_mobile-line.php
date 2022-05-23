
<div class="mobail-line">
	<ul class="mobail-line__cont">
		<li><a class="mobail-line__link" href="/ceny/">ЦЕНЫ</a></li>
		<li><a class="mobail-line__link" href="/kategorii/">КАТЕГОРИИ</a></li>
		<li><a class="mobail-line__link mobail-line__link_phone " href="tel:89299569316">ПОЗВОНИТЬ</a></li>
	</ul>
</div>

<style>
    /*--------------------------- mobail-line */
    :root {
        --ml-media-width: 991;
        --min-width: 1000px;
        --ml-block-color-1: #000000;
        --ml-block-color-2: #000000;
        --ml-block-border-color: rgba(255, 255, 255, 0.5);
        --ml-btn-color: #ffffff;
        --ml-btn-bg-color: rgba(126, 126, 126, 0.7);
        --ml-btn-phone-bg-color: #D4382C;
    }

    .mobail-line {
        position: fixed;
        z-index: 10;
        right: 0;
        bottom: 0;
        display: none;
        justify-content: center;
        width: 100%;
        padding: 14px 0;
        border: 1px solid var(--ml-block-border-color);
        background: radial-gradient(123.99% 123.99% at 14.53% 104.1%, var(--ml-block-color-1) 4.57%, var(--ml-block-color-2) 20.16%);
    }

    .mobail-line__cont {
        display: flex;
        justify-content: flex-end;
        width: 90%;
        margin: 0 auto;
        list-style: none;
    }

    .mobail-line__cont a {
        font-size: 14px;
        line-height: 25px;
        display: inline-block;
        margin: 0 5px;
        padding: 0 20px;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        color: var(--ml-btn-color);
        border: 1px solid var(--ml-btn-color);
        border-radius: 37px;
        background: var(--ml-btn-bg-color);
    }

    .mobail-line__cont a.mobail-line__link_phone {
        display: flex;
        align-items: center;
        color: var(--ml-btn-color);
        background: var(--ml-btn-phone-bg-color);
    }

    .mobail-line__cont a.mobail-line__link_phone:after {
        display: inline-block;
        width: 17px;
        height: 23px;
        margin-left: 5px;
        content: '';
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'%3E%3Cpath fill='%23ffffff' d='M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right center;
        background-size: 15px auto;
    }

    @media (max-width: 991px ) {
        body {
            margin-bottom: 55px;
        }

        .mobail-line {
            display: block;
        }

    }

    @media (max-width: 575.98px) {
        .mobail-line__cont {
            justify-content: space-between;
        }

        .mobail-line__cont a {
            padding: 0 10px;
        }
    }
</style>