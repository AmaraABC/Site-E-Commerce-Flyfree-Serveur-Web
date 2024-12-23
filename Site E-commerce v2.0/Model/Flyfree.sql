create table users (
    id_user serial,
    username varchar(50) not null,
    emails varchar(70) not null,
    mot_de_passe varchar(255),
    primary key (id_user),
    unique (emails)
);

create table articles (
    id_article serial,
    titre varchar(100) not null,
    prix decimal(6,2) not null,
    article_description varchar(255) not null,
    date_offre date not null,
    date_fin date not null,
    image varchar not null,
    primary key (id_article)
);

create table panier();