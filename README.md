# PvPoketw

Attention! This is NOT official http://pvpoke.com repository! 
Please visit https://github.com/pvpoke/pvpoke

This is non-official, mandarin(tradtitonal Chinese) version of pvpoke(pvpoke.com) webiste source code, with permission from original creator.

## Running PvPoke
### Using docker
You can easily run PvPokeTW using docker by following these steps:

1. [Install docker](https://docs.docker.com/engine/install/)
2. [Install docker-compose](https://docs.docker.com/compose/install/)
3. Run PvPokeTW using the following command from the directory where you extracted (or cloned) PvPoke files:
```bash
$ docker-compose -f docker/docker-compose.yml up --build
```

This also works with [podman](https://podman.io/getting-started/installation) and [podman-compose](https://github.com/containers/podman-compose)
