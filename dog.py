
import turtle

# Create a turtle object
t = turtle.Turtle()

# Draw the dog's body
t.color('brown')
t.begin_fill()
t.circle(50)
t.end_fill()

# Draw the dog's head
t.penup()
t.goto(50, 60)
t.pendown()
t.begin_fill()
t.circle(25)
t.end_fill()

# Draw the dog's ears
t.penup()
t.goto(75, 85)
t.pendown()
t.color('black')
t.begin_fill()
t.circle(10)
t.end_fill()
t.penup()
t.goto(25, 85)
t.pendown()
t.begin_fill()
t.circle(10)
t.end_fill()

# Draw the dog's eyes
t.penup()
t.goto(60, 70)
t.pendown()
t.color('white')
t.begin_fill()
t.circle(5)
t.end_fill()
t.penup()
t.goto(40, 70)
t.pendown()
t.begin_fill()
t.circle(5)
t.end_fill()

# Draw the dog's nose
t.penup()
t.goto(50, 55)
t.pendown()
t.color('black')
t.begin_fill()
t.circle(2)
t.end_fill()

# Draw the dog's legs
t.penup()
t.goto(30, 0)
t.pendown()
t.color('brown')
t.pensize(10)
t.goto(10, -30)
t.goto(25, -60)
t.penup()
t.goto(70, 0)
t.pendown()
t.goto(90, -30)
t.goto(75, -60)

# Hide the turtle and finish the drawing
t.hideturtle()
turtle.done()
