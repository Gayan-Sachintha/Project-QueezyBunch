
# Project-QueezyBunch


Queezy Bunch is an exciting puzzle game that tests your knowledge and keeps you entertained. Built with a robust MVC architecture and utilizing the Tomato API, this game offers a smooth and enjoyable experience for players of all ages.

## Prototypes

Here Is the Sample User Interface of This Game
[![Click Here](https://img.shields.io/badge/Click%20Here-View%20Figma%20Prototype-blue)](https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2FGo1DuSSfqsTfPREeEyBVqE%2FMy-quiz-game-(Copy)%3Fpage-id%3D0%253A1%26node-id%3D15-23%26starting-point-node-id%3D15%253A23%26scaling%3Dscale-down%26mode%3Ddesign%26t%3DSLccB3iyR2QUOylW-1)

## Features

- Limited time: Answer questions correctly before the clock runs out!
- Level up: Score points and pass levels for an extra challenge.
- Tomato API integration: See images and answer related questions.
- Simple interface: Easy to learn and play, perfect for casual gamers.


## Technologies

- Front-End: HTML, CSS, Bootstrap, javaScript
- Back-End: PHP
- API: Tomato API
## Run Locally

Clone the project

```bash
  git clone https://github.com/Gayan-Sachintha/Project-QueezyBunch.git
```

Move the project to the www directory of WampServer

```makefile
  C:\wamp64\www\QueezyBunch
```

Start WampServer

```bash
  Launch WampServer, and ensure that the server is running.
```
```bash
The WampServer icon in the system tray should turn green, indicating that the server is online.
```

Access the project in a web browser

```bash
  Open a web browser and go to http://localhost/QueezyBunch.
```


## API Reference

#### Get all items

```http
  GET /api/items
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `api_key` | `string` | Not Required |

#### Get item

```http
GET /api/items/${question}
GET /api/items/${solution}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `question`      | `string` | Id of item to fetch |
| `solution`      | `string` | Id of item to fetch |




# Project-QueezyBunch


Game Steps Given Below

![step1](https://github.com/Gayan-Sachintha/Project-QueezyBunch/assets/118958174/9df66b68-0d3f-49bf-8e58-baaefe506602)
![step2](https://github.com/Gayan-Sachintha/Project-QueezyBunch/assets/118958174/0c34ea34-4c7c-4a8e-bd88-6efd3e05d7a9)
![step3](https://github.com/Gayan-Sachintha/Project-QueezyBunch/assets/118958174/15c1b983-5bc7-47c1-ad0f-e8646dfa95be)
![step4](https://github.com/Gayan-Sachintha/Project-QueezyBunch/assets/118958174/1fb73a30-a855-4ad9-8b11-4d79ac402115)
![step5](https://github.com/Gayan-Sachintha/Project-QueezyBunch/assets/118958174/2e00f67c-5921-4c0a-8792-95a15fc4d374)

## License

**This project is licensed under the :** [MIT License](https://choosealicense.com/licenses/mit/)

## Happy Gaming with QueezyBunch! 🎮🕹️🎉

