# Villabate Alba WordPress theme

A block theme. No page builder needed, and everything is editable in the normal WordPress editor.

## Install

1. In WordPress, go to **Appearance > Themes > Add New > Upload Theme**.
2. Upload `villabate-alba.zip` and click **Activate**.
3. Go to **Settings > Reading**. Set "Your homepage displays" to **A static page** and pick (or create) a page called Home.
4. The homepage loads with every section in place.

Needs WordPress 6.4 or newer.

## Editing content

- Go to **Appearance > Editor > Templates > Front Page**. Each section is a block pattern: click any text, photo or button to change it.
- Colors and fonts are set in one place: **Appearance > Editor > Styles**.
- To add a section to another page, open the block inserter, go to **Patterns**, then pick the **Villabate Alba** category.
- Photos ship with the theme. To swap one, click the image and choose **Replace**.

## Seasonal features (assets/js/villabate.js)

The site picks a season from today's date:

| Season | Dates |
|---|---|
| Thanksgiving | Oct 1 to Nov 26 |
| Christmas | Nov 27 to Dec 31 |
| Easter / St. Joseph's | Jan 1 to Apr 30 |
| Mother's Day | May 1 to May 12 |
| Father's Day | May 13 to Jun 21 |
| Summer / gelato | Jun 22 to Sep 30 |

To preview a season, add `?season=christmas` to the URL. The other options are `fall`, `spring`, `mothers`, `fathers` and `summer`.

- **Slide-in card.** One message per season, set in the Header pattern. It slides in from the right after a second, and stays hidden for the rest of the visit once closed. Edit the wording there.
- **Seasonal shop.** In the Shop pattern, each product card has classes that control the sorting:
  - `vb-in-fall`, `vb-in-christmas`, `vb-in-spring`, `vb-in-mothers`, `vb-in-fathers`, `vb-in-summer`: puts the product first, with an "In season" tag, during that season.
  - `vb-cat-cookies`, `vb-cat-pastry`, `vb-cat-marzipan`, `vb-cat-trays`: which filter button shows it.
  - `vb-only-SEASON`: only shows during that season (used for the seasonal specials).

  Add or remove these under the block's **Advanced > Additional CSS class(es)** setting.
- **Rotating reviews.** In the Hero pattern, each Quote block inside the rotating reviews group becomes one slide. Add, remove or edit Quote blocks there.

To change the season dates, edit `seasonFor()` at the top of `villabate.js`.

## Things to connect (plugins)

These parts are placeholders in the theme. Each one needs a service or plugin:

| Part | What to use |
|---|---|
| Shop "Add" buttons | Link each one to its product page in the current Shopify store, or use Shopify's Buy Button. |
| Holiday pre-order form | Shopify local pickup with a scheduling app, or WooCommerce with a pickup-date plugin. Replace the form in the Holiday pattern. |
| Instagram grid | An Instagram feed plugin (for example Smash Balloon). Replace the photo grid in the Instagram pattern with the plugin's block. |
| Reviews | Optional: a Google Reviews plugin to replace the hand-picked review cards. |
| Newsletter signup | Mailchimp (or your email tool's) WordPress form block. Replace the form in the Footer pattern. |
| Cake order / contact | A form plugin such as WPForms or Gravity Forms. Point the "Start a cake order" and "Plan an event" buttons at it. |
| Map | Already live: a Google Maps embed in the Visit pattern, no API key needed. |
| English / Italian | Polylang or WPML, plus Italian text. |

## Still to fill in

Search the patterns for square brackets: `[PRICE]`, `[SIZES]`, `[HOLIDAY HOURS]`, `[FLAVOR]`, `[X]` days ahead, `[PICKUP SPOT]`, `[YEAR]`.

## Fonts

The theme loads Fraunces, Inter and Italianno from Google Fonts. To host them locally (better for privacy rules in some places), download them and add them under `settings.typography.fontFamilies` in `theme.json`.
