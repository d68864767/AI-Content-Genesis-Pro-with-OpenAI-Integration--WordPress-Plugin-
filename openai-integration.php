```php
<?php
/**
 * OpenAI Integration File
 *
 * This file contains the functions necessary for integrating with the OpenAI API.
 *
 * @package AI Content Genesis Pro
 */

// Prevent direct file access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Function to initialize the OpenAI API
 *
 * @return OpenAI\GPT3\Client
 */
function ai_content_genesis_pro_initialize_openai() {
    // Include the OpenAI PHP SDK
    require_once 'vendor/autoload.php';

    // Initialize the OpenAI client with the API key
    $client = new OpenAI\GPT3\Client(AI_CONTENT_GENESIS_PRO_API_KEY);

    return $client;
}

/**
 * Function to generate content using the OpenAI API
 *
 * @param OpenAI\GPT3\Client $client
 * @param string $prompt
 * @param int $max_tokens
 * @return string
 */
function ai_content_genesis_pro_generate_content($client, $prompt, $max_tokens = 500) {
    // Generate the content
    $response = $client->complete($prompt, $max_tokens);

    // Extract the content from the response
    $content = $response['choices'][0]['text'];

    return $content;
}
```
