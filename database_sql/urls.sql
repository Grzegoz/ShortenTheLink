-- public.urls определение

-- Drop table

-- DROP TABLE public.urls;

CREATE TABLE public.urls (
	id bigserial NOT NULL,
	url varchar NOT NULL,
	CONSTRAINT urls_pkey PRIMARY KEY (id)
);
