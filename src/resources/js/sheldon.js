$(document).ready(function () {
    $('.sheldon_game').find('.list-group-item').click(function () {
        removeActiveClasses();
        $(this).addClass('active');
        let humanChoise = $(this).data('choise');
        let browserchoise = Math.floor(Math.random() * (6 - 1)) + 1;
        browserChoise(browserchoise);
        //game results
        gameResults(humanChoise, browserchoise)

    })

    function removeActiveClasses() {
        $('.sheldon_game').find("button").removeClass('active');
    }

    // tijeras = 1
    // papel = 2
    // roca = 3
    // lagarto = 4
    // spock = 5
    function browserChoise(browserchoise) {
        switch (browserchoise) {
            case 1:
                $('.sheldon_game').find('.browserChoise').text('Browser picked: Tijeras')
                break;
            case 2:
                $('.sheldon_game').find('.browserChoise').text('Browser picked: Papel')
                break;
            case 3:
                $('.sheldon_game').find('.browserChoise').text('Browser picked: Roca')
                break;
            case 4:
                $('.sheldon_game').find('.browserChoise').text('Browser picked: Lagarto')
                break;
            case 5:
                $('.sheldon_game').find('.browserChoise').text('Browser picked: Spock')
                break;
        }
    }

    // tijeras = 1
    // papel = 2
    // roca = 3
    // lagarto = 4
    // spock = 5
    function gameResults(humanChoise, browserChoise) { //comparing results with every alternative
        let gameResultsSelector = $('.gameResults');
        gameResultsSelector.text('');
        if (humanChoise === browserChoise) {
            gameResultsSelector.text('Draw!')
        }
        switch (humanChoise) {
            case 1:
                switch (browserChoise) {
                    case 2:
                        gameResultsSelector.text('Human wins, Las tijeras cortan el papel');
                        saveResults('h')
                        break
                    case 3:
                        gameResultsSelector.text('Browser wins, La roca aplasta las tijeras');
                        saveResults('b')
                        break;
                    case 4:
                        gameResultsSelector.text('Human wins, Las tijeras decapitan al lagarto');
                        saveResults('h')
                        break;
                    case 5:
                        gameResultsSelector.text('Browser wins, Spock aplasta las tijeras');
                        saveResults('b')
                        break
                }
                break;
            case 2:
                switch (browserChoise) {
                    case 1:
                        gameResultsSelector.text('Browser wins, Las tijeras cortan el papel');
                        saveResults('b')
                        break
                    case 3:
                        gameResultsSelector.text('Human wins, El papel cubre la roca ');
                        saveResults('h')
                        break;
                    case 4:
                        gameResultsSelector.text('Browser wins, El lagarto come el papel');
                        saveResults('b')
                        break;
                    case 5:
                        gameResultsSelector.text('Human wins, El papel refuta a Spock');
                        saveResults('h')
                        break
                }
                break;
            case 3:
                switch (browserChoise) {
                    case 1:
                        gameResultsSelector.text('Human wins, La roca aplasta las tijeras');
                        saveResults('h')
                        break
                    case 2:
                        gameResultsSelector.text('Browser wins, El papel cubre la roca');
                        saveResults('b')
                        break
                    case 4:
                        gameResultsSelector.text('Human wins, La roca aplasta al lagarto');
                        saveResults('h')
                        break;
                    case 5:
                        gameResultsSelector.text('Browser wins, Spock vaporiza la roca');
                        saveResults('b')
                        break
                }
                break;
            case 4:
                switch (browserChoise) {
                    case 1:
                        gameResultsSelector.text('Browser wins, Las tijeras decapitan al lagarto');
                        saveResults('b')
                        break
                    case 2:
                        gameResultsSelector.text('Human wins, El lagarto come el papel');
                        saveResults('h')
                        break
                    case 3:
                        gameResultsSelector.text('Browser wins, La roca aplasta al lagarto');
                        saveResults('b')
                        break
                    case 5:
                        gameResultsSelector.text('Human wins, El lagarto envenena a Spock');
                        saveResults('h')
                        break
                }
                break;
            case 5:
                switch (browserChoise) {
                    case 1:
                        gameResultsSelector.text('Human wins, Spock aplasta las tijeras');
                        saveResults('h')
                        break
                    case 2:
                        gameResultsSelector.text('Browser wins, El papel refuta a Spock');
                        saveResults('b')
                        break
                    case 3:
                        gameResultsSelector.text('Human wins, Spock vaporiza la roca');
                        saveResults('h')
                        break
                    case 4:
                        gameResultsSelector.text('Browser wins, El lagarto envenena a Spock');
                        saveResults('b')
                        break
                }
                break;
        }
    }

    function saveResults(winner) {

        let sheldon_game_selector = $('.sheldon_game');
        let list_group = sheldon_game_selector.find('.list-group-item');
        let spinner = sheldon_game_selector.find('.spinner-border');

        list_group.prop("disabled", true);
        spinner.prop('hidden', false);
        $.ajaxSetup({
            type: 'POST',
            url: '/sheldon/saveResults/' + $('.game_user_id').text(),
            headers: {
                'X-CSRF-TOKEN': $('#token').val()
            }
        })
        $.ajax({
            data: {
                'winner': winner
            },
            success: function (data) {
                list_group.prop("disabled", false);
                spinner.prop('hidden', true);
                $('.game_user_wins').text(data[0].wins);
                $('.game_user_losses').text(data[0].losses);

            },
        })
    }

})
