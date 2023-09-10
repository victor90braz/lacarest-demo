```markdown
# Personal Notes

## Laravel Setup with Laragon

### Installation Steps:

1. Download Laragon from [laragon.org](https://laragon.org/download/index.html).

2. Choose the desired version:
   - [Download Laragon - Full (173 MB)](https://github.com/leokhoa/laragon/releases/download/6.0.0/laragon-wamp.exe)

### Using PHP in the Terminal (CMD):

- Check available PHP commands:
  ```sh
  php -h
  ```

- Start a local PHP server:
  ```sh
  PHP -S localhost:8888
  ```

## PHP String Handling: Double Quotes vs. Single Quotes

### Double Quotes (" "):

- Variables enclosed in double quotes are replaced with their values. This is known as variable interpolation.

- Escape sequences (e.g., `\n`, `\t`, `\"`) are interpreted and converted to special characters.

- Example:
  ```php
  $name = "John";
  echo "Hello, $name!";
  // Outputs: Hello, John!
  ```

### Single Quotes (' '):

- Variables inside single quotes are not interpolated; they are treated as literal strings.

- Escape sequences are not interpreted within single quotes. 
- Everything inside single quotes is treated as a plain string.

- Example:
  ```php
  $name = "John";
  echo 'Hello, $name!';
  // Outputs: Hello, $name!
  ```

The differences between the two code snippets you provided are related to how you output variables in PHP:

1. **Using `<?= ... ?>` (Short Echo Tags):**
   ```html
   <img src="<?= $pathImages['logo'] ?>" alt="Logo" />
   <h1 class="title"><?= $title ?></h1>
   ```
   In this approach, you're using the short echo tags `<?= ... ?>`, which are a shorthand way of echoing variables in PHP. They automatically output the result of the expression within the tags. It's a more concise and cleaner way to echo variables.

2. **Using `<?php echo ... ?>`:**
   ```html
   <img src="<?php echo $pathImages['logo'] ?>" alt="Logo" />
   <h1 class="title"><?php echo $title ?></h1>
   ```
   In this approach, you're using the traditional PHP syntax to echo variables. You explicitly use `<?php echo ... ?>` to output the content of the variable.

Both approaches achieve the same result, which is to insert the value of the variable into the HTML. However, the first approach using `<?= ... ?>` is considered more modern and concise, making the code cleaner and easier to read. It's often preferred in newer PHP code because it reduces verbosity.
