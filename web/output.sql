--
-- PostgreSQL database dump
--

-- Dumped from database version 10.2 (Ubuntu 10.2-1.pgdg14.04+1)
-- Dumped by pg_dump version 10.1

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

--
-- Name: history; Type: TYPE; Schema: public; Owner: yswuoogushbavu
--

CREATE TYPE history AS ENUM (
    'canceled',
    'edited',
    'created'
);


ALTER TYPE history OWNER TO yswuoogushbavu;

--
-- Name: role; Type: TYPE; Schema: public; Owner: yswuoogushbavu
--

CREATE TYPE role AS ENUM (
    'employee',
    'manager',
    'customer'
);


ALTER TYPE role OWNER TO yswuoogushbavu;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: appointment; Type: TABLE; Schema: public; Owner: yswuoogushbavu
--

CREATE TABLE appointment (
    id integer NOT NULL,
    date date NOT NULL,
    "time" time without time zone NOT NULL,
    history history NOT NULL,
    details character varying(256),
    picture character varying(124),
    serviceid integer NOT NULL,
    customerid integer NOT NULL,
    employeeid integer NOT NULL
);


ALTER TABLE appointment OWNER TO yswuoogushbavu;

--
-- Name: appointment_id_seq; Type: SEQUENCE; Schema: public; Owner: yswuoogushbavu
--

CREATE SEQUENCE appointment_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE appointment_id_seq OWNER TO yswuoogushbavu;

--
-- Name: appointment_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: yswuoogushbavu
--

ALTER SEQUENCE appointment_id_seq OWNED BY appointment.id;


--
-- Name: availability; Type: TABLE; Schema: public; Owner: yswuoogushbavu
--

CREATE TABLE availability (
    id integer NOT NULL,
    start time without time zone NOT NULL,
    finish time without time zone NOT NULL,
    day date NOT NULL,
    employeeid integer NOT NULL,
    booked boolean NOT NULL
);


ALTER TABLE availability OWNER TO yswuoogushbavu;

--
-- Name: availability_id_seq; Type: SEQUENCE; Schema: public; Owner: yswuoogushbavu
--

CREATE SEQUENCE availability_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE availability_id_seq OWNER TO yswuoogushbavu;

--
-- Name: availability_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: yswuoogushbavu
--

ALTER SEQUENCE availability_id_seq OWNED BY availability.id;


--
-- Name: person; Type: TABLE; Schema: public; Owner: yswuoogushbavu
--

CREATE TABLE person (
    id integer NOT NULL,
    name character varying(256) NOT NULL,
    email character varying(124) NOT NULL,
    password character varying(80) NOT NULL,
    phone character varying(20),
    positionid integer NOT NULL
);


ALTER TABLE person OWNER TO yswuoogushbavu;

--
-- Name: person_id_seq; Type: SEQUENCE; Schema: public; Owner: yswuoogushbavu
--

CREATE SEQUENCE person_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE person_id_seq OWNER TO yswuoogushbavu;

--
-- Name: person_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: yswuoogushbavu
--

ALTER SEQUENCE person_id_seq OWNED BY person.id;


--
-- Name: position; Type: TABLE; Schema: public; Owner: yswuoogushbavu
--

CREATE TABLE "position" (
    id integer NOT NULL,
    "position" role NOT NULL
);


ALTER TABLE "position" OWNER TO yswuoogushbavu;

--
-- Name: position_id_seq; Type: SEQUENCE; Schema: public; Owner: yswuoogushbavu
--

CREATE SEQUENCE position_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE position_id_seq OWNER TO yswuoogushbavu;

--
-- Name: position_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: yswuoogushbavu
--

ALTER SEQUENCE position_id_seq OWNED BY "position".id;


--
-- Name: product; Type: TABLE; Schema: public; Owner: yswuoogushbavu
--

CREATE TABLE product (
    id integer NOT NULL,
    name character varying(124) NOT NULL,
    price smallint NOT NULL,
    size numeric NOT NULL,
    picture character varying(124) NOT NULL
);


ALTER TABLE product OWNER TO yswuoogushbavu;

--
-- Name: product_id_seq; Type: SEQUENCE; Schema: public; Owner: yswuoogushbavu
--

CREATE SEQUENCE product_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE product_id_seq OWNER TO yswuoogushbavu;

--
-- Name: product_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: yswuoogushbavu
--

ALTER SEQUENCE product_id_seq OWNED BY product.id;


--
-- Name: purchasehistory; Type: TABLE; Schema: public; Owner: yswuoogushbavu
--

CREATE TABLE purchasehistory (
    id integer NOT NULL,
    personid integer NOT NULL,
    productid integer NOT NULL
);


ALTER TABLE purchasehistory OWNER TO yswuoogushbavu;

--
-- Name: purchasehistory_id_seq; Type: SEQUENCE; Schema: public; Owner: yswuoogushbavu
--

CREATE SEQUENCE purchasehistory_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE purchasehistory_id_seq OWNER TO yswuoogushbavu;

--
-- Name: purchasehistory_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: yswuoogushbavu
--

ALTER SEQUENCE purchasehistory_id_seq OWNED BY purchasehistory.id;


--
-- Name: scriptures; Type: TABLE; Schema: public; Owner: yswuoogushbavu
--

CREATE TABLE scriptures (
    id integer NOT NULL,
    book character varying(50) NOT NULL,
    chapter integer NOT NULL,
    verse integer NOT NULL,
    content character varying(250)
);


ALTER TABLE scriptures OWNER TO yswuoogushbavu;

--
-- Name: scriptures_id_seq; Type: SEQUENCE; Schema: public; Owner: yswuoogushbavu
--

CREATE SEQUENCE scriptures_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE scriptures_id_seq OWNER TO yswuoogushbavu;

--
-- Name: scriptures_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: yswuoogushbavu
--

ALTER SEQUENCE scriptures_id_seq OWNED BY scriptures.id;


--
-- Name: service; Type: TABLE; Schema: public; Owner: yswuoogushbavu
--

CREATE TABLE service (
    id integer NOT NULL,
    service character varying(64) NOT NULL,
    cost smallint NOT NULL,
    duration smallint NOT NULL
);


ALTER TABLE service OWNER TO yswuoogushbavu;

--
-- Name: service_id_seq; Type: SEQUENCE; Schema: public; Owner: yswuoogushbavu
--

CREATE SEQUENCE service_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE service_id_seq OWNER TO yswuoogushbavu;

--
-- Name: service_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: yswuoogushbavu
--

ALTER SEQUENCE service_id_seq OWNED BY service.id;


--
-- Name: appointment id; Type: DEFAULT; Schema: public; Owner: yswuoogushbavu
--

ALTER TABLE ONLY appointment ALTER COLUMN id SET DEFAULT nextval('appointment_id_seq'::regclass);


--
-- Name: availability id; Type: DEFAULT; Schema: public; Owner: yswuoogushbavu
--

ALTER TABLE ONLY availability ALTER COLUMN id SET DEFAULT nextval('availability_id_seq'::regclass);


--
-- Name: person id; Type: DEFAULT; Schema: public; Owner: yswuoogushbavu
--

ALTER TABLE ONLY person ALTER COLUMN id SET DEFAULT nextval('person_id_seq'::regclass);


--
-- Name: position id; Type: DEFAULT; Schema: public; Owner: yswuoogushbavu
--

ALTER TABLE ONLY "position" ALTER COLUMN id SET DEFAULT nextval('position_id_seq'::regclass);


--
-- Name: product id; Type: DEFAULT; Schema: public; Owner: yswuoogushbavu
--

ALTER TABLE ONLY product ALTER COLUMN id SET DEFAULT nextval('product_id_seq'::regclass);


--
-- Name: purchasehistory id; Type: DEFAULT; Schema: public; Owner: yswuoogushbavu
--

ALTER TABLE ONLY purchasehistory ALTER COLUMN id SET DEFAULT nextval('purchasehistory_id_seq'::regclass);


--
-- Name: scriptures id; Type: DEFAULT; Schema: public; Owner: yswuoogushbavu
--

ALTER TABLE ONLY scriptures ALTER COLUMN id SET DEFAULT nextval('scriptures_id_seq'::regclass);


--
-- Name: service id; Type: DEFAULT; Schema: public; Owner: yswuoogushbavu
--

ALTER TABLE ONLY service ALTER COLUMN id SET DEFAULT nextval('service_id_seq'::regclass);


--
-- Data for Name: appointment; Type: TABLE DATA; Schema: public; Owner: yswuoogushbavu
--

COPY appointment (id, date, "time", history, details, picture, serviceid, customerid, employeeid) FROM stdin;
1	2017-12-20	10:00:00	created	\N	\N	1	1	7
2	2018-01-17	10:30:00	created	\N	\N	1	1	7
3	2018-02-14	12:00:00	created	\N	\N	1	1	7
4	2017-12-21	10:00:00	created	\N	\N	9	2	7
5	2018-01-18	10:30:00	created	\N	\N	7	2	7
6	2018-02-15	12:00:00	created	\N	\N	3	2	7
7	2017-12-22	10:00:00	created	\N	\N	7	3	7
8	2018-01-19	10:30:00	created	\N	\N	20	3	7
9	2018-02-16	12:00:00	created	\N	\N	1	3	7
10	2017-12-19	10:00:00	created	\N	\N	1	4	7
11	2018-01-20	10:30:00	created	\N	\N	4	4	7
12	2018-02-17	12:00:00	created	\N	\N	1	4	7
13	2017-12-18	10:00:00	created	\N	\N	2	5	7
14	2018-01-21	10:30:00	created	\N	\N	4	5	7
15	2018-02-18	12:00:00	created	\N	\N	20	5	7
16	2017-12-17	10:00:00	created	\N	\N	1	6	7
17	2018-01-22	10:30:00	created	\N	\N	8	6	7
18	2018-02-19	12:00:00	created	\N	\N	1	6	7
19	2018-02-20	16:00:00	created	I have a larger poriatal ridge, so please be aware	\N	1	8	7
20	2018-02-23	12:00:00	created	Testing	\N	1	9	7
55	2018-02-26	09:00:00	created		\N	2	43	7
58	2018-02-28	09:00:00	created		\N	1	44	7
\.


--
-- Data for Name: availability; Type: TABLE DATA; Schema: public; Owner: yswuoogushbavu
--

COPY availability (id, start, finish, day, employeeid, booked) FROM stdin;
\.


--
-- Data for Name: person; Type: TABLE DATA; Schema: public; Owner: yswuoogushbavu
--

COPY person (id, name, email, password, phone, positionid) FROM stdin;
1	Dan	example01@hotmail.com	pass	\N	1
2	Sarah Palin	example02@hotmail.com	pass	\N	1
3	Steve Cobert	example03@hotmail.com	pass	\N	1
4	Bob Hanks	example04@hotmail.com	pass	\N	1
5	Karen Roberts	example05@hotmail.com	pass	\N	1
6	Marley Joe	example06@hotmail.com	pass	\N	1
7	Karli	boss@hotmail.com	pass	\N	1
8	Blue Clues	trial01@example.com	password		1
9	TA	ta@ta.ta	password		1
43	Mama Mia	trial02@example.com	$2y$10$kpfYGKxkjRLEZM.58PCPge1UcBhgNI4DMzOWvhdkySSpscBNhi2ge		1
44	Blue Clues	trial03@example.com	$2y$10$AXUcsjI/RAevW5q3HgIx0OaYULXImcA0gNK6j6k2.D49qCPjOEj/u		1
45	Daniel Hansen	trial06@example.com	$2y$10$hnB8ZdrolAgDV66sFbOnvOHH5nPkMRdGZIV0/Ek7CxGdZsClb.Z9S		1
\.


--
-- Data for Name: position; Type: TABLE DATA; Schema: public; Owner: yswuoogushbavu
--

COPY "position" (id, "position") FROM stdin;
1	customer
2	employee
3	manager
\.


--
-- Data for Name: product; Type: TABLE DATA; Schema: public; Owner: yswuoogushbavu
--

COPY product (id, name, price, size, picture) FROM stdin;
1	Tea Tree Special: Shampoo	15	10.14	images/Tea-Tree-Special-Shampoo.JPG
2	Tea Tree Special: Conditioner	20	16.9	images/Tea-Tree-Special-Conditioner.JPG
3	Tea Tea Tree Special: Hair and Scalp Treatment	20	16.9	images/Tea-Tree-Special-Hair-and-Scalp-Treatment.JPG
4	Tea Tree Special: Body Bar	9	5.3	images/Tea-Tree-Special-Body-Bar.JPG
5	Tea Tree Special: Aromatic Oil	10	0.35	images/Tea-Tree-Special-Aromatic-Oil.JPG
6	Lemon Sage: Shampoo	15	10.14	images/Lemon-Sage-Shampoo.JPG
7	Lemon Sage: Conditioner	15	10.14	images/Lemon-Sage-Conditioner.PNG
8	Lavender Mint: Moisturizing Shampoo	15	10.14	images/Lavender-Mint-Moisturizing-Shampoo.JPG
9	Lavender Mint: Moisturizing Conditioner	15	10.14	images/Lavender-Mint-Moisturizing-Conditioner.JPG
10	Lavender Mint: Conditioning Leave-In Spray	18	6.8	images/Lavender-Mint-Conditioning-Leave-In-Spray.JPG
11	MarulaOil: Rare Oil Replenishing Shampoo	20	7.5	images/MarulaOil-Rare-Oil-Replenishing-Shampoo.PNG
12	MarulaOil: Rare Oil Replenishing Conditioner	25	7.5	images/MarulaOil-Rare-Oil-Replenishing-Conditioner.PNG
13	MarulaOil Light: Rare Oil Volumizing Shampoo	20	24	images/MarulaOil-Light-Rare-Oil-Volumizing-Shampoo.PNG
14	MarulaOil Light: Rare Oil Volumizing Conditioner	25	7.5	images/MarulaOil-Light-Rare-Oil-Volumizing-Conditioner.PNG
15	Awapuhi Wild Ginger Repair: Moisturizing Lather Shampoo	15	8.5	images/Awapuhi-Wild-Ginger-Repair-Moisturizing-Lather-Shampoo.JPG
16	Awapuhi Wild Ginger Repair: Keratin Cream Rinse	15	8.5	images/Awapuhi-Wild-Ginger-Repair-Keratin-Cream-Rinse.JPG
17	Awapuhi Wild Ginger Repair: Keratin Intensive Treatment	20	5.1	images/Awapuhi-Wild-Ginger-Repair-Keratin-Intensive-Treatment.PNG
18	Original: Awapuhi Shampoo	15	10.14	images/Original-Awapuhi-Shampoo.JPG
19	Original: Shampoo One	15	10.14	images/Original-Shampoo-One.JPG
20	Original: The Conditioner	10	3.4	images/Original-The-Conditioner.JPG
21	Strength: Super Strong Shampoo	15	10.14	images/Strength-Super-Strong-Shampoo.JPG
22	Strength: Super Strong Conditioner	15	10.14	images/Strength-Super-Strong-Conditioner.JPG
23	Strength: Super Strong Treatment	10	6.8	images/Strength-Super-Strong-Treatment.JPG
24	Color Care: Color Protect Shampoo	15	10.14	images/Color-Care-Color-Protect-Shampoo.JPG
25	Color Care: Color Protect Conditioner	15	10.14	images/Color-Care-Color-Protect-Conditioner.JPG
26	Color Care: Color Protect Reconstructive Treatment	10	5.1	images/Color-Care-Color-Protect-Reconstructive-Treatment.JPG
27	Color Care: Color Protect Locking Spray	15	8.5	images/Color-Care-Color-Protect-Locking-Spray.JPG
28	Moisture: Instant Moisture Shampoo	15	10.14	images/Moisture-Instant-Moisture-Shampoo.JPG
29	Moisture: Instant Moisture Treatment	10	6.8	images/Moisture-Instant-Moisture-Treatment.JPG
30	Moisture: Super-Charged Moisturizer	10	6.8	images/Moisture-Super-Charged-Moisturizer.JPG
31	Moisture: Awapuhi Moisture Mist	20	16.9	images/Moisture-Awapuhi-Moisture-Mist.JPG
32	Kids: Baby DonΓÇÖt Cry Shampoo	10	10.14	images/Kids-Baby-Dont-Cry-Shampoo.JPG
33	Kids: Taming Spray	8	8.5	images/Kids-Taming-Spray.JPG
34	Curls: Spring Loaded Frizz-Fighting Shampoo	12	8.5	images/Curls-Spring-Loaded-Frizz-Fighting-Shampoo.JPG
35	Curls: Spring Loaded Frizz-Fighting Conditioner	10	6.8	images/Curls-Spring-Loaded-Frizz-Fighting-Conditioner.JPG
36	Curls: Full Circle Leave-In Treatment	10	6.8	images/Curls-Full-Circle-Leave-In-Treatment.JPG
37	Curls: Ultimate Wave	10	5.1	images/Curls-Ultimate-Wave.JPG
38	Curls: Twirl Around	12	5.1	images/Curls-Twirl-Around.JPG
39	Neuro Liquid: Lather (Shampoo)	20	9.2	images/Neuro-Liquid-Lather-(Shampoo).JPG
40	Neuro Liquid: Rinse (Conditioner)	20	9.2	images/Neuro-Liquid-Rinse-(Conditioner).JPG
41	Neuro Liquid: Repair	12	5.1	images/Neuro-Liquid-Repair.PNG
42	Neuro Liquid: Prime	12	4.7	images/Neuro-Liquid-Prime.PNG
43	Neuro Liquid: Protect	15	6	images/Neuro-Liquid-Protect.PNG
44	Invisiblewear: Shampoo	35	33.8	images/Invisiblewear-Shampoo.JPG
45	Invisiblewear: Conditioner	15	10.14	images/Invisiblewear-Conditioner.PNG
46	Invisiblewear: Boomerang Restyling Mist	12	8.5	images/Invisiblewear-Boomerang-Restyling-Mist.JPG
47	Invisiblewear: Blonde Dry Shampoo	10	4.7	images/Invisiblewear-Blonde-Dry-Shampoo.JPG
48	Invisiblewear: Brunette Dry Shampoo	10	4.7	images/Invisiblewear-Brunette-Dry-Shampoo.JPG
49	Neon: Sugar Cleanse	12	10.14	images/Neon-Sugar-Cleanse.JPG
50	Neon: Sugar Twist	10	6.8	images/Neon-Sugar-Twist.JPG
51	Neon: Sugar Cream	10	6.8	images/Neon-Sugar-Cream.JPG
52	Smoothing: Super Skinny Shampoo	15	10.14	images/Smoothing-Super-Skinny-Shampoo.JPG
53	Smoothing: Super Skinny Treatment	15	10.14	images/Smoothing-Super-Skinny-Treatment.JPG
54	Smoothing: Super Skinny Serum	15	5.1	images/Smoothing-Super-Skinny-Serum.JPG
55	Extra-Body: Shampoo	15	10.14	images/Extra-Body-Shampoo.JPG
56	Extra-Body: Rinse	15	10.14	images/Extra-Body-Rinse.JPG
57	Extra-Body: Boost	12	8.5	images/Extra-Body-Boost.JPG
58	Extra-Body: Firm Finishing Spray	12	3.8	images/Extra-Body-Firm-Finishing-Spray.JPG
59	Mitch: Double Hitter	16	8.5	images/Mitch-Double-Hitter.JPG
60	Mitch: Hardwired	15	2.5	images/Mitch-Hardwired.JPG
61	Mitch: Reformer	18	3	images/Mitch-Reformer.JPG
62	Mitch: BarberΓÇÖs Classic	18	3	images/Mitch-Barber-Classic.JPG
\.


--
-- Data for Name: purchasehistory; Type: TABLE DATA; Schema: public; Owner: yswuoogushbavu
--

COPY purchasehistory (id, personid, productid) FROM stdin;
1	1	3
2	1	25
3	1	36
4	2	60
5	2	50
6	2	48
7	3	52
8	3	53
9	3	54
10	4	41
11	4	42
12	4	43
13	5	21
14	5	22
15	5	23
16	6	30
17	6	31
18	6	32
19	8	1
20	8	61
21	8	59
22	9	1
55	43	1
\.


--
-- Data for Name: scriptures; Type: TABLE DATA; Schema: public; Owner: yswuoogushbavu
--

COPY scriptures (id, book, chapter, verse, content) FROM stdin;
1	John	1	5	And the light shineth in darkness; and the darkness comprehended it not.
2	Doctrine and Covenants	88	49	The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall comprehend even God, being quickened in him and by him.
3	Doctrine and Covenants	93	28	He that keepeth his commandments receiveth truth and light, until he is glorified in truth and knoweth all things.
4	Mosiah	16	9	He is the light and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.
\.


--
-- Data for Name: service; Type: TABLE DATA; Schema: public; Owner: yswuoogushbavu
--

COPY service (id, service, cost, duration) FROM stdin;
1	Men's cut	30	60
2	Women's cut	40	60
3	Child's cut	25	60
4	Color	80	120
5	Touch-up	70	120
6	Deep condition and scalp massage	30	90
7	Makeup	50	60
8	Manicure	15	90
9	Pedicure	25	90
10	Acrylic	30	90
11	Perm	90	120
12	Relaxer	75	120
13	Skin	80	60
14	Brow wax	15	30
15	Upper lip wax	12	30
16	Cheek wax	12	30
17	Chin wax	12	30
18	Ear wax	12	30
19	Nose wax	12	30
20	Full face wax	40	30
\.


--
-- Name: appointment_id_seq; Type: SEQUENCE SET; Schema: public; Owner: yswuoogushbavu
--

SELECT pg_catalog.setval('appointment_id_seq', 59, true);


--
-- Name: availability_id_seq; Type: SEQUENCE SET; Schema: public; Owner: yswuoogushbavu
--

SELECT pg_catalog.setval('availability_id_seq', 1, false);


--
-- Name: person_id_seq; Type: SEQUENCE SET; Schema: public; Owner: yswuoogushbavu
--

SELECT pg_catalog.setval('person_id_seq', 45, true);


--
-- Name: position_id_seq; Type: SEQUENCE SET; Schema: public; Owner: yswuoogushbavu
--

SELECT pg_catalog.setval('position_id_seq', 3, true);


--
-- Name: product_id_seq; Type: SEQUENCE SET; Schema: public; Owner: yswuoogushbavu
--

SELECT pg_catalog.setval('product_id_seq', 62, true);


--
-- Name: purchasehistory_id_seq; Type: SEQUENCE SET; Schema: public; Owner: yswuoogushbavu
--

SELECT pg_catalog.setval('purchasehistory_id_seq', 55, true);


--
-- Name: scriptures_id_seq; Type: SEQUENCE SET; Schema: public; Owner: yswuoogushbavu
--

SELECT pg_catalog.setval('scriptures_id_seq', 4, true);


--
-- Name: service_id_seq; Type: SEQUENCE SET; Schema: public; Owner: yswuoogushbavu
--

SELECT pg_catalog.setval('service_id_seq', 20, true);


--
-- Name: appointment appointment_pkey; Type: CONSTRAINT; Schema: public; Owner: yswuoogushbavu
--

ALTER TABLE ONLY appointment
    ADD CONSTRAINT appointment_pkey PRIMARY KEY (id);


--
-- Name: availability availability_pkey; Type: CONSTRAINT; Schema: public; Owner: yswuoogushbavu
--

ALTER TABLE ONLY availability
    ADD CONSTRAINT availability_pkey PRIMARY KEY (id);


--
-- Name: person person_email_key; Type: CONSTRAINT; Schema: public; Owner: yswuoogushbavu
--

ALTER TABLE ONLY person
    ADD CONSTRAINT person_email_key UNIQUE (email);


--
-- Name: person person_pkey; Type: CONSTRAINT; Schema: public; Owner: yswuoogushbavu
--

ALTER TABLE ONLY person
    ADD CONSTRAINT person_pkey PRIMARY KEY (id);


--
-- Name: position position_pkey; Type: CONSTRAINT; Schema: public; Owner: yswuoogushbavu
--

ALTER TABLE ONLY "position"
    ADD CONSTRAINT position_pkey PRIMARY KEY (id);


--
-- Name: product product_name_key; Type: CONSTRAINT; Schema: public; Owner: yswuoogushbavu
--

ALTER TABLE ONLY product
    ADD CONSTRAINT product_name_key UNIQUE (name);


--
-- Name: product product_pkey; Type: CONSTRAINT; Schema: public; Owner: yswuoogushbavu
--

ALTER TABLE ONLY product
    ADD CONSTRAINT product_pkey PRIMARY KEY (id);


--
-- Name: purchasehistory purchasehistory_pkey; Type: CONSTRAINT; Schema: public; Owner: yswuoogushbavu
--

ALTER TABLE ONLY purchasehistory
    ADD CONSTRAINT purchasehistory_pkey PRIMARY KEY (id);


--
-- Name: scriptures scriptures_pkey; Type: CONSTRAINT; Schema: public; Owner: yswuoogushbavu
--

ALTER TABLE ONLY scriptures
    ADD CONSTRAINT scriptures_pkey PRIMARY KEY (id);


--
-- Name: service service_pkey; Type: CONSTRAINT; Schema: public; Owner: yswuoogushbavu
--

ALTER TABLE ONLY service
    ADD CONSTRAINT service_pkey PRIMARY KEY (id);


--
-- Name: appointment appointment_customerid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: yswuoogushbavu
--

ALTER TABLE ONLY appointment
    ADD CONSTRAINT appointment_customerid_fkey FOREIGN KEY (customerid) REFERENCES person(id);


--
-- Name: appointment appointment_employeeid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: yswuoogushbavu
--

ALTER TABLE ONLY appointment
    ADD CONSTRAINT appointment_employeeid_fkey FOREIGN KEY (employeeid) REFERENCES person(id);


--
-- Name: appointment appointment_serviceid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: yswuoogushbavu
--

ALTER TABLE ONLY appointment
    ADD CONSTRAINT appointment_serviceid_fkey FOREIGN KEY (serviceid) REFERENCES service(id);


--
-- Name: availability availability_employeeid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: yswuoogushbavu
--

ALTER TABLE ONLY availability
    ADD CONSTRAINT availability_employeeid_fkey FOREIGN KEY (employeeid) REFERENCES person(id);


--
-- Name: person person_positionid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: yswuoogushbavu
--

ALTER TABLE ONLY person
    ADD CONSTRAINT person_positionid_fkey FOREIGN KEY (positionid) REFERENCES "position"(id);


--
-- Name: public; Type: ACL; Schema: -; Owner: yswuoogushbavu
--

REVOKE ALL ON SCHEMA public FROM postgres;
REVOKE ALL ON SCHEMA public FROM PUBLIC;
GRANT ALL ON SCHEMA public TO yswuoogushbavu;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- Name: plpgsql; Type: ACL; Schema: -; Owner: postgres
--

GRANT ALL ON LANGUAGE plpgsql TO yswuoogushbavu;


--
-- PostgreSQL database dump complete
--

