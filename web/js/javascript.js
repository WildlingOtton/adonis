canvas               = O('logo')
context              = canvas.getContext('2d')
context.font         = 'bold italic 97px Georgia'
context.textBaseline = 'top'
image                = new Image()
image.src            = 'https://adonis-regis.herokuapp.com/images/barbell.GIF'

image.onload = function()
{
  gradient = context.createLinearGradient(0, 0, 0, 89)
  gradient.addColorStop(0.00, '#b5b1b1')
  gradient.addColorStop(0.66, '#000000')
  context.fillStyle = gradient
  context.fillText(  "Adonis ", 0, 0)
  context.strokeText("Adonis", 0, 0)
  context.drawImage(image, 400, 32)
}

function O(i) { return typeof i == 'object' ? i : document.getElementById(i) }
function S(i) { return O(i).style                                            }
function C(i) { return document.getElementsByClassName(i)                    }
