$(document).ready(function () {
    // available boostrap colors
    // primary
    // success
    // danger
    // warning
    // dark
    // info

    let rowCounter = 7;
    let columnCounter = 4;
    let randomColors = generateRandomColors();
    console.log(randomColors);
    $('.mastermind_game').find('.available_colors > button').click(function () { //check when human click on specific colors
        setHumanChoise($(this).data('color'))

    })

    function setHumanChoise(color) { //set human choise in the table
        $('.pos' + rowCounter).find('td:eq(' + columnCounter + ')').html('<button type="button" class="btn btn-' + color + '" data-color="' + color + '"></button>');
        columnCounter++;
    }


    function generateRandomColors() { //generate random color to start the game
        let presavedElements = ['primary', 'success', 'danger', 'warning', 'dark', 'info']
        let randomedElements = [];
        for (let i = 0; i < 4; i++) {
            let randomedElement = presavedElements[Math.floor(Math.random() * presavedElements.length)];
            let findElement = randomedElements.find(element => element === randomedElement);
            if (findElement === undefined) {
                randomedElements.push(randomedElement);
            } else {
                i--;
            }
        }
        return randomedElements;
    }

    $('.check').click(function () {
        if (columnCounter >= 8) {
            let j = 0;
            let evalResult = [];
            for (let i = 4; i < 8; i++) {
                let tdColor = $('.pos' + rowCounter).find('td:eq(' + i + ') button').data('color')
                if (tdColor === randomColors[j]) {
                    $('.pos' + rowCounter).find('td:eq(' + j + ')').html('<button type="button" class="btn btn-dark" data-color="dark"></button>')
                    j++;
                    evalResult.push(true);
                } else {
                    let findColor = randomColors.find(color => color === tdColor);
                    if (findColor !== undefined) {
                        $('.pos' + rowCounter).find('td:eq(' + j + ')').html('<button type="button" class="btn btn-light" data-color="light"></button>')
                        j++;
                        evalResult.push(false);
                    } else {
                        j++;
                        evalResult.push(false);
                    }
                }
            }
            columnCounter = 4;
            rowCounter--;


            let findFalse = evalResult.find(element => element === false);
            if (findFalse === undefined) {
                saveResults(true);
                alert('You Won');
            } else {
                if (rowCounter < 0) {
                    saveResults(false);
                    alert('You lost');
                }
            }
        } else {
            alert('Please complete the row');
        }
    })

    function saveResults(winner) {
        let spinner = $('.mastermind_game').find('.spinner-border');
        spinner.prop('hidden', false);
        $.ajaxSetup({
            type: 'POST',
            url: '/mastermind/saveResults/' + $('.game_user_id').text(),
            headers: {
                'X-CSRF-TOKEN': $('#token').val()
            }
        })
        $.ajax({
            data: {
                'winner': winner
            },
            success: function (data) {
                spinner.prop('hidden', true);
                $('.game_user_wins').text(data[0].wins);
                $('.game_user_losses').text(data[0].losses);
                $('.check').prop('disabled', true);
            },
        })

    }
})
