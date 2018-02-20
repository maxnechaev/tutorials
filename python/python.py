def decorator (func):
    def wrapper ():
        print ("Code before function")
        func ()
        print ("Code after function")
    return wrapper

def qwe (func):
    def wrapper ():
        print ("Code before function2")
        func ()
        print ("Code after function2")
    return wrapper

def test (func):
    def wrapper ():
        print ("Code before function3")
        func ()
        print ("Code after function3")
    return wrapper

@decorator
@qwe
@test
def show ():
    print ("I am a simple function")


show()
