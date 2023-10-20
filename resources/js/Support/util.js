/**
 * Truncate text at certain amount of words.
 *
 * @param text
 * @param wordCount
 * @param truncateWith Characters to display at the end of truncated text
 * @param wordSeparator What constitutes separated words
 * @returns {*}
 */
export function words(text, wordCount, truncateWith = '...', wordSeparator = ' ') {
    const words = text.split(wordSeparator)
    const partialText = words.slice(0, wordCount)

    const truncatedText = partialText.join(wordSeparator)

    return partialText.length < words.length
        ? truncatedText.concat(truncateWith)
        : truncatedText
}
