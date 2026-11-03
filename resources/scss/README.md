# Novaris SCSS

Styles follow ITCSS. The numbered folders load in order (see `screen.scss`):

| Folder | Holds | Prints CSS? |
|---|---|---|
| `01.settings` | The scales: breakpoints, colors, fonts, spacing… | No |
| `02.tools` | `up()` / `down()` breakpoints and the `utility()` generator | No |
| `03.generics` | Reset, and `02.tokens`: colors, fonts, and widths as CSS custom properties | Yes |
| `04.elements` | Bare HTML tags | Yes |
| `05.objects` | Layout patterns | Yes |
| `06.layouts` | Header, content, footer | Yes |
| `07.components` | Your theme's pieces | Yes |
| `08.utilities` | Helper classes, **generated from the settings** | Yes |

## Generated helper classes

Every helper class comes from a scale in `01.settings`. Change the scale and the classes change on the next build:

| Edit this setting | And these classes follow |
|---|---|
| `$colors` (03.colors) | `.text-{color}`, `.bg-{color}`, `.border-{color}` |
| `$spacing-steps`, `$spacing-unit` (08.spacings) | `.m-*`, `.p-*`, `.mt-*`… `.gap-*` |
| `$font-families` (06.fonts) | `.font-{name}` |
| `$font-sizes`, `$font-weights`, `$line-heights` | `.text-{size}`, `.font-{weight}`, `.leading-{name}` |
| `$border-widths`, `$radii` (01.borders) | `.border-{n}`, `.rounded-{name}` |
| `$shadows`, `$opacities` (05.effects) | `.shadow-{name}`, `.opacity-{n}` |
| `$sizes` (07.sizings) | `.w-{name}`, `.h-{name}` |
| `$content-widths` (04.dimensions) | `.max-w-{name}`, `.container` |
| `$breakpoints` (02.breaks) | the `md:` / `lg:` prefixes |

For example, add a font to `$font-families`:

```scss
$font-families: (
	body:    ( 'Merriweather', serif ),
	heading: ( 'Fira Sans', sans-serif ),
	mono:    ( ui-monospace, Menlo, Consolas, monospace ),
	date:    ( 'Tangerine', cursive ),   // new
);
```

and `.font-date` exists, along with `--font-date` for your own CSS.

### Responsive classes

Classes marked responsive also get a copy per breakpoint, written `breakpoint:class` in HTML:

```html
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">…</div>
<p class="text-center md:text-left">…</p>
<nav class="hidden lg:block">…</nav>
```

Mobile first: the plain class applies everywhere, and `md:` takes over from 768px up.

Which breakpoints get copies is set by `$utility-breakpoints` in `01.settings/09.utilities` (default `md` and `lg`). Each one adds a full copy of every responsive class, so only list the ones you use.

### The classes

| Folder | Classes |
|---|---|
| 01.a11y | `.screen-reader-text` (shown on focus) |
| 02.alignments | `.alignleft`, `.alignright`, `.aligncenter`, `.alignwide`, `.alignfull` |
| 03.background | `.bg-{color}` |
| 04.borders | `.border`, `.border-{0,1,2,4}`, `.border-{color}`, `.rounded-{none,sm,md,lg,xl,full}` |
| 05.effects | `.shadow-{none,sm,md,lg}`, `.opacity-{0,25,50,75,100}` |
| 06.flexbox | `.flex-{row,col,wrap,…}`, `.items-{start,center,end,…}`, `.justify-{start,center,between,…}`, `.flex-1`, `.grow`, `.shrink-0` |
| 07.grid | `.grid-cols-{1–12}`, `.col-span-{1–12,full}` |
| 08.helpers | `.clearfix`, `.truncate`, `.cursor-pointer`, `.select-none` |
| 09.layout | `.block`, `.flex`, `.grid`, `.hidden`…, `.relative`, `.absolute`…, `.overflow-*`, `.container` |
| 10.list | `.list-none`, `.list-disc`, `.list-decimal`, `.list-inside` |
| 11.media | `.object-cover`, `.object-contain`, `.aspect-square`, `.aspect-video` |
| 12.sizing | `.w-{full,half,third,…}`, `.h-*`, `.max-w-{narrow,medium,wide}`, `.min-h-screen` |
| 13.text | `.text-{left,center,right}`, `.text-{color}`, `.uppercase`, `.underline`, `.italic` |
| 14.typography | `.font-{family}`, `.text-{xs…4xl}`, `.font-{light…bold}`, `.leading-*` |
| 15.spacings | `.m-*`, `.p-*` (and `t r b l x y` sides), `.mx-auto`, `.gap-*`, `.gap-x-*`, `.gap-y-*` |

## Make your own

The generator works for any property. In a utilities file:

```scss
@use '../../02.tools' as tools;

@include tools.utility( z, z-index, ( 0: 0, 10: 10, 50: 50 ) );
// .z-0, .z-10, .z-50

@include tools.utility( null, visibility, ( visible: visible, invisible: hidden ), $responsive: true );
// .visible, .invisible, .md:visible, .lg:invisible…
```

Arguments: class prefix (or `null` for the key alone), CSS property (or a list of properties), a map of `suffix: value`, and `$responsive`.

## Breakpoints in your own styles

```scss
@use '../../02.tools' as tools;

.site-header {
	padding: 1rem;

	@include tools.up( md ) {
		padding: 2rem;
	}
}
```

A typo such as `tools.up( tablet )` stops the build and lists the valid names.

## Run-time changes

Colors, font families, and content widths are also CSS custom properties (`--color-primary`, `--font-heading`, `--width-wide`), and their classes use them. A Customizer setting or a child theme can restyle them without a rebuild:

```css
:root { --color-primary: #e63946; --font-heading: 'Fira Sans', sans-serif; }
```

## Size

With the default scales and `md`/`lg` copies, the utilities add about 1,000 classes (about 30 KB minified, around 5 KB gzipped). To trim, remove scale steps you don't use, or set `$utility-breakpoints: ( md )`.
