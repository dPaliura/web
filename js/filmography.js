var options = {
    
    _axis_color: 'rgb(31, 85, 15)',
    _axis_opacity: '1',
    _axis_width: '3',

    _axis_text_color: 'rgb(50, 140, 45)',
    _axis_text_font: 'sans-serif',
    _axis_names_font_size: '16',
    _axis_text_font_size: '13',
    _axis_text_opacity: '1',

    _background: 'none',
    _background_opacity: '0.3',

    _block_fill:'#ccc',
    _block_opacity: '1',
    _block_stroke_color: '#cda',
    _block_stroke_width: '2',

    _graph_width: '800',
    _graph_height: '430',

    _hover_block_fill: 'white',
    _hover_block_opacity: '0.1',
    _hover_block_stroke_color: 'black',
    _hover_block_stroke_width: '2',

    _hover_values_text_color: 'rgb(233, 155, 12)',
    _hover_values_text_opacity: '0.9',
    _hover_values_font: 'sans-serif',

    _label_color: 'crimson',
    _label_opacity: '0',

    _names_text_color: 'rgb(50, 140, 45)',
    _names_font: 'sans-serif',
    _names_font_opacity: '1',

    _values_text_color: 'white',
    _values_text_opacity: '0',
    _values_font: 'sans-serif',

    _transition: 'all .2s ease-in',

    _X_name: 'Мультфим',
    _Y_name: 'IMDB рейтинг',
};
var names = ['Навсикая из долины ветров 1984', "Небесный замок Лапута 1986", "Могила светлячков 1988", "Мой сосед Тоторо 1988", "Ведьмина служба доставки 1989", "Еще вчера 1991", "Порко Россо 1992", "Здесь слышен океан 1993", "Помпоко: Война тануки 1994", "Шёпот сердца 1995", "Принцесса Мононокэ 1997", "Мои соседи Ямада 1999", "Унесенные призраками 2001", "Возвращение кота 2002", "Ходячий замок Хаула 2004", "Сказания Земноморья 2006", "Рыбка Поньо на утёсе 2008", "Ариэтти из страны лилипутов 2010", "Со склонов Кокурико 2011", "Ветер крепчает 2013", "Сказания о принцессе Кагуя 2013", "Воспоминания Марни 2014", "Красная черепаха 2016"];
var values = [8.1, 8.1, 8.2, 8.2, 8.0, 7.7, 7.8, 7.0, 7.5, 8.1, 8.1, 7.7, 8.4, 7.7, 8.3, 7.0, 7.9, 7.9, 7.9, 7.9, 7.8, 7.8, 7.2];
values = [8.1, 8.1, 8.5, 8.2, 7.9, 7.7, 7.8, 6.9, 7.4, 8.0, 8.4, 7.3, 8.6, 7.3, 8.2, 6.5, 7.7, 7.7, 7.4, 7.8, 8.1, 7.8, 7.6];
build_graph(names, values, '#graph_there', options)