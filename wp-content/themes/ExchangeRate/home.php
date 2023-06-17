<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>

<div class="currency-rates">
    <div class="main-text">
        <h1 class="left-heading"> <font>Exchange rate</font></h1>
        <h1 class="center-heading" ><font>Purchase</font></h1>
        <h1 class="right-heading"><font>Sales</font></h1>
    </div>

	<?php
	function parse_exchange_rate_api() {
		$url      = 'https://api.obmenka.dn.ua:5001/course?agent=2';
		$response = wp_remote_get( $url );

		if ( is_wp_error( $response ) ) {
			return 'The list of exchange rates does not work';
		}

		$body = wp_remote_retrieve_body( $response );
		$data = json_decode( $body, true );

		return $data;
	}

	$data = parse_exchange_rate_api();
	$data = $data['data'];

	$selected_city = [
		'city'  =>  'Варшава'
	];
	if ( ! empty( $data ) && ! empty( $selected_city ) ) {

		$selected_city_data = null;

		foreach ( $data as $city_data ) {

			if ( $city_data['city'] === $selected_city['city'] ) {
				$selected_city_data = $city_data;
				break;
			}
		}
		if ( ! empty( $selected_city_data ) ) {
			foreach ( $selected_city_data['rates'] as $currency ) {
				?>
                <div class="currency">
                    <div class="currency-info notranslate">
                        <div class="currency-name ">
							<?php
							$currency_icon = '';

							switch ( $currency['val'] ) {
								case 'USD':
									$currency_icon = '<div class="currency-flag currency-flag-usd"></div>';
									break;
								case 'PLN':
									$currency_icon = '<div class="currency-flag currency-flag-pln"></div>';
									break;
								case 'UAH':
									$currency_icon = '<div class="currency-flag currency-flag-uah"></div>';
									break;
								case 'EUR':
									$currency_icon = '<div class="currency-flag currency-flag-eur"></div>';
									break;
								case 'TRY':
									$currency_icon = '<div class="currency-flag currency-flag-try"></div>';
									break;
								case 'CHF':
									$currency_icon = '<div class="currency-flag currency-flag-chf"></div>';
									break;
								case 'ILS':
									$currency_icon = '<div class="currency-flag currency-flag-ils"></div>';
									break;
								case 'GBP':
									$currency_icon = '<div class="currency-flag currency-flag-gbp"></div>';
									break;
								case 'AUD':
									$currency_icon = '<div class="currency-flag currency-flag-aud"></div>';
									break;
								case 'CAD':
									$currency_icon = '<div class="currency-flag currency-flag-cad"></div>';
									break;
								case 'BYN':
									$currency_icon = '<div class="currency-flag currency-flag-byn"></div>';
									break;
								case 'GEL':
									$currency_icon = '<div class="currency-flag currency-flag-gel"></div>';
									break;
								case 'CZK':
									$currency_icon = '<div class="currency-flag currency-flag-czk"></div>';
									break;
								case 'SEK':
									$currency_icon = '<div class="currency-flag currency-flag-sek"></div>';
									break;
								case 'DKK':
									$currency_icon = '<div class="currency-flag currency-flag-dkk"></div>';
									break;
								case 'HUF':
									$currency_icon = '<div class="currency-flag currency-flag-huf"></div>';
									break;
								case 'MDL':
									$currency_icon = '<div class="currency-flag currency-flag-mdl"></div>';
									break;
								case 'NOK':
									$currency_icon = '<div class="currency-flag currency-flag-nok"></div>';
									break;
							}


							echo $currency_icon.$currency['val']; ?>/<div class="currency-flag currency-flag-pln"></div>PLN
                        </div>
                        <div class="currency-price">
                            <span class="currency-buy"><?php echo $currency['Buy']; ?></span>
                            <span class="currency-sell"><?php echo $currency['Sale']; ?></span>
                        </div>
                    </div>
                </div>
				<?php
			}
		}
	}
	?>
</div>

<div class="exchange-info">
    <div class="table-container">
        <table>
            <tr>
                <td>
                    <div class="contact-details">
                        <h3>Contacts:</h3>
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i><?php the_field( 'address' ); ?></li>
                            <li><i class="fas fa-map-marker-alt"></i><a href="<?php the_field( 'address_link' ); ?>">View on the map</a></li>
                            <li><i class="fas fa-phone"></i><a class="phone" href="tel:<?php the_field( 'phone_number' ); ?>"><?php the_field( 'phone' ); ?></a>
                            </li>
                        </ul>
                    </div>
                </td>
                <td>
                    <div class="additional-info">
                        <h3>Additional Information:</h3>
                        <ul>
                            <li><i class="fas fa-clock"></i><?php the_field( 'time_work' ); ?></li>
                            <li><i class="fas fa-coins"></i><?php the_field( 'text_1' ); ?></li>
                            <li><i class="fas fa-money-bill-wave"></i><?php the_field( 'text_2' ); ?></li>
                        </ul>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

<div class="about">
	<?php the_field( 'text_about' ); ?>
</div>


<?php get_footer(); ?>
