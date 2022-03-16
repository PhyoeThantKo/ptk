module.exports = {
     content: [
          '*.php',
          'components/footer.php',
          'admin/**/*.php'
     ],
     css: ['public/style/style.css'],
     defaultExtractor: (content) => content.match(/[\w-/:]+(?<!:)/g) || [],
     output: 'public/style/min.css',
};