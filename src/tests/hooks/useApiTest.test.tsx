// __tests__/fetch.test.js

import React from "react";

import { rest } from "msw";

import { setupServer } from "msw/node";

import { render, waitFor, screen } from "@testing-library/react";

import "@testing-library/jest-dom";

import App from "../../App";



const server = setupServer(

    rest.get(

        "https://randomuser.me/api/",

        (req, res, ctx) => {

            return res(

                ctx.json(

                    {
                        "results": [
                            {
                                "gender": "female",
                                "name": {
                                    "title": "Mme",
                                    "first": "Hestiah",
                                    "last": "Scott"
                                },
                                "location": {
                                    "street": {
                                        "number": 9235,
                                        "name": "Havreveien"
                                    },
                                    "city": "Melbu",
                                    "state": "Akershus",
                                    "country": "Norway",
                                    "postcode": "4843",
                                    "coordinates": {

                                        "latitude": "55.3526",

                                        "longitude": "-47.8826"

                                    },

                                    "timezone": {

                                        "offset": "+10:00",

                                        "description": "Eastern Australia, Guam, Vladivostok"

                                    }

                                },

                                "email": "nojus.begum@example.com",

                                "login": {

                                    "uuid": "b0fe580e-e135-49cd-a818-c16b55ca9b98",

                                    "username": "bigleopard786",

                                    "password": "kingpin",

                                    "salt": "6envMYZ3",

                                    "md5": "540ce7fa7732e12ce86f59f2767f0bcb",

                                    "sha1": "95a96015a460e02ed26e465002708dca20fe56cd",

                                    "sha256": "68f0d8a3f84e3c288b2512ed476f1e2710fb90a5ab31c7bf580419ff6f73c9cf"

                                },
                                "dob": {

                                    "date": "1950-10-14T17:13:02.865Z",

                                    "age": 72

                                },

                                "registered": {

                                    "date": "2009-09-02T13:12:17.279Z",

                                    "age": 13

                                },

                                "phone": "53766755",

                                "cell": "49216525",

                                "id": {

                                    "name": "FN",

                                    "value": "14105016507"

                                },

                                "picture": {

                                    "large": "https://randomuser.me/api/portraits/men/72.jpg",

                                    "medium": "https://randomuser.me/api/portraits/med/men/72.jpg",

                                    "thumbnail": "https://randomuser.me/api/portraits/thumb/men/72.jpg"

                                },

                                "nat": "NO"

                            }

                        ],

                        "info": {

                            "seed": "27f1b45bf9685b75",

                            "results": 1,

                            "page": 1,

                            "version": "1.3"

                        }

                    }

                )

            );

        }

    )

);

beforeAll(() => server.listen());

afterEach(() => server.resetHandlers());

afterAll(() => server.close());



test("load user mock", async () => {

    const { container } = render(<App />);

    await waitFor(() => screen.getByText(/Hestiah/i));
    expect(container.getElementsByTagName("img").length).toBe(1);

});