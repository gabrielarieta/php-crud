create table user_colors(
    id INTEGER PRIMARY KEY NOT NULL UNIQUE,
    user_id INTEGER NOT NULL,
    color_id INTEGER NOT NULL
)