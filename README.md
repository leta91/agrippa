# :sauna_man: Agrippa 

## :paintbrush: Roman Baths Booking Website 

| WordPress version | Web Server version | PHP version | Database version |
| ---               | ---                | ---         | ---              |
| 6.4.2             | nginx 1.16.0       | 8.1.23      | MySQL 8.0.16     |

The ***"Agrippa"*** project uses a ***Block Theme*** for WordPress

### "Agrippa" Theme Development Step-By-Step:

1. :white_check_mark: Within your local WordPress installation, go to `... > app > public > wp-content > themes` and add a new empty folder named `agrippa` :open_file_folder:

2. :white_check_mark: add the 2 **required** files for a WordPress Block theme, all within `agrippa` theme folder: 
- `style.css` 
- `templates` folder :open_file_folder: and a file inside of it named `index.html` (this file represents the default/fallback template and it will allow WordPress to recognize it as a block theme)  

3. :white_check_mark: add `screenshot.png` as the screenshot image for ***"Agrippa"*** Theme :framed_picture:

4. :white_check_mark: add an empty `functions.php` within `agrippa` theme folder

5. :white_check_mark: add an empty `theme.json` within `agrippa` theme folder **(for Global Settings and Styles)**

6. :white_check_mark: add `assets` 📂 within `agrippa` theme folder **(for additional CSS, JavaScript and images)**

7. :white_check_mark: based on the anatomy of my project, add in `templates/` the pages I need:

- `front-page.html`  
- `page.html` 

8. ✅ add `parts` 📂 within `agrippa` theme folder and put inside of it:

- `header.html`
- `footer.html`

9. ✅ add code in `functions.php` to load `style.css` and create the option for it to be loaded in the editor

10. ✅ add initial code in `theme.json` 

<p>&nbsp;</p>

#### :books: Important Notes </br>
- `templates` 📂 represents the website structure on the front-end

- (example) loading `header.html` and then parsing its block markup
`<!-- wp:template-part {"slug":"header","tagName":"header"} /-->`</br>

`slug` = `parts/header.html`
`tagName` = the wrapping container for this HTML file :arrow_right: `<header></header>`

- WordPress does not currently support nested template parts. Example :no_entry: to `parts/header` but instead have files directly in `parts`

- the block theme development will be made up of these steps:
1. work directly within the WordPress admin and its visual editor
2. migrate the block markup from the editor to your template part files as described in  [***Introduction to Templates***](https://developer.wordpress.org/themes/templates/introduction-to-templates/)

- Remember that if you save the parts from `Appearance > Editor > Patterns > Template Parts`, they will be *stored in the database and will overrule any templates in your theme*

- avoid closing `?>` PHP tags at the end of files with only PHP code. Otherwise, it will create unwanted whitespace and it will output errors in the code  

- to find out the configuration details of the WordPress site (such as version of PHP, server, database etc.), go to `WP dashboard > Tools > Site Health > Info`

- `theme.json` tells WordPress what settings you want to enable, how to style specific elements and blocks, and which templates and template parts to register. The configuration  for `Settings` and `Styles`, for example, can be found in the page editor (WP admin) and they are represented by two symbols on the top-right corner
<p>&nbsp;</p>

##### 📓 Documentation [^1] [^2]
[^1]: https://developer.wordpress.org/themes/core-concepts/theme-structure/
[^2]: https://i0.wp.com/developer.wordpress.org/files/2023/10/template-hierarchy-scaled.jpeg?ssl=1




