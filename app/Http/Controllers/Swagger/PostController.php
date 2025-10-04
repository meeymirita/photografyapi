<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use OpenApi\Annotations as OA;

/**
 * @OA\Post(
 *     path="/api/posts",
 *     summary="Создание поста",
 *     tags={"Post"},
 *     security={{"bearerAuth": {}}},
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="title", type="string", example="Some title"),
 *                     @OA\Property(property="likes", type="integer", example=20)
 *                 )
 *             }
 *         )
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="object",
 *
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="title", type="string", example="Some title"),
 *                 @OA\Property(property="likes", type="integer", example=20)
 *             )
 *         ),
 *     ),
 * ),
 *
 * @OA\Get(
 *      path="/api/posts",
 *      summary="Список постов",
 *      tags={"Post"},
 *      security={{"bearerAuth": {}}},
 *
 *      @OA\Response(
 *          response=200,
 *          description="OK",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="array", @OA\Items(
 *                   @OA\Property(property="id", type="integer", example=1),
 *                   @OA\Property(property="title", type="string", example="Some title"),
 *                   @OA\Property(property="likes", type="integer", example=20)
 *              )),
 *          ),
 *      ),
 * ),
 * @OA\Get(
 *       path="/api/posts/{post}",
 *       summary="Один пост",
 *       tags={"Post"},
 *       security={{"bearerAuth": {}}},
 *
 *       @OA\Parameter(
 *           description="id поста",
 *           in="path",
 *           name="post",
 *           required=true,
 *           example=1
 *       ),
 *       @OA\Response(
 *           response=200,
 *           description="OK",
 *           @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="title", type="string", example="Some title"),
 *                  @OA\Property(property="likes", type="integer", example=20)
 *              ),
 *          ),
 *       ),
 * ),
 *
 * @OA\Patch(
 *        path="/api/posts/{post}",
 *        summary="Обновление",
 *        tags={"Post"},
 *        security={{"bearerAuth": {}}},
 *
 *        @OA\Parameter(
 *            description="id поста",
 *            in="path",
 *            name="post",
 *            required=true,
 *            example=2
 *        ),
 *        @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="title", type="string", example="Some title for edit"),
 *                      @OA\Property(property="likes", type="integer", example=111)
 *                  )
 *               }
 *           )
 *        ),
 *
 *        @OA\Response(
 *            response=200,
 *            description="OK",
 *            @OA\JsonContent(
 *               @OA\Property(property="data", type="object",
 *
 *                   @OA\Property(property="id", type="integer", example=1),
 *                   @OA\Property(property="title", type="string", example="Some title"),
 *                   @OA\Property(property="likes", type="integer", example=20)
 *               ),
 *           ),
 *        ),
 *  ),
 *
 * @OA\Delete(
 *        path="/api/posts/{post}",
 *        summary="удаление поста",
 *        tags={"Post"},
 *        security={{"bearerAuth": {}}},
 *
 *        @OA\Parameter(
 *            description="id поста",
 *            in="path",
 *            name="post",
 *            required=true,
 *            example=1
 *        ),
 *        @OA\Response(
 *            response=200,
 *            description="OK",
 *            @OA\JsonContent(
 *               @OA\Property(property="success", type="string", example="true"),
 *           ),
 *        ),
 *  ),
 *
 *
 */
class PostController extends Controller
{
}
