from project_module import project_object, image_object, link_object, challenge_object

p = project_object('keycode', 'Key decoder')
p.domain = 'http://www.aidansean.com/'
p.path = 'keycode'
p.preview_image_ = image_object('http://placekitten.com.s3.amazonaws.com/homepage-samples/408/287.jpg', 408, 287)
p.github_repo_name = 'keycode'
p.mathjax = True
p.links.append(link_object(p.domain, 'keycode', 'Live page'))
p.introduction = 'This project tells the user the keycode associated with a given key in a given browser.'
p.overview = '''This project was quickly written as a tool for developing web based projects.  Looking up keycodes in tables is so long winded, and this saves a lot of time.'''

p.challenges.append(challenge_object('This project must have cross browser support.', 'As keycodes and event handling vary across browsers this project had to be tested on all the major browsers.  It was fairly easy to do and this is a trivial project. ', 'Resolved'))
